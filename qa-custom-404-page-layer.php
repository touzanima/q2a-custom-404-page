<?php

class qa_html_theme_layer extends qa_html_theme_base 
{
	function head_css() 
	{
		qa_html_theme_base::head_css();	
		$style_costum = qa_opt('pt_404_costum_css');		
		$style_final = '<style type="text/css">' . $style_costum . '</style>';
		$this->output($style_final);
		$css_url = qa_opt('site_url').'qa-plugin/'.QA_404_FOLDER_NAME.'/qa-custom-404-style.css';
        $this->output('<link rel="stylesheet" TYPE="text/css" href="'.$css_url.'"/>');
	}
	
        function main()
        {
            if (($this->template==='not-found') && (qa_opt('pt_enable_html_404_message'))) 
	    {
		$this->output('<div class="qa-main">');
		$this->output('<div class="not-found-message">') ;
			$this->output(qa_opt('pt_q2a_html_404_message_codebox'));
		$this->output('</div>') ;
		if(qa_opt('pt_add_search_box_on_404')){
			//if it is enabled for search button 
			$this->output('<div class="pt-404-search-box">') ;
			
				$this->output('<div class="pt-404-search-field-lable">') ;
					$this->output(qa_opt('pt_search_box_on_404_lable')) ;
				$this->output( '</div>' ) ;
				$search_url = qa_opt('site_url').'search';
				$this->output('<div class="search">
									<form method="get" action="'.$search_url.'" _lpchecked="1" class="form-wrapper cf">
										<input type="text" name="q" value="" class="qa-search-field" placeholder="Search here..." required>
										<button type="submit" class="qa-search-button"> Search  </button>
									</form>
							  </div>') ;
			
			$this->output('</div>') ;
		}
		
		$this->output('</div>');
		
            } 
	   else
	    {
                qa_html_theme_base::main();
	    }
        }
}

/*
	Omit PHP closing tag to help avoid accidental output
*/
