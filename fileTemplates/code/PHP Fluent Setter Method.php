#set ( $CAPITALIZED_PARAM_NAME = ${StringUtils.removeAndHump(${PARAM_NAME}, ".")} )
/**
 * @param ${TYPE_HINT} $prm${CAPITALIZED_PARAM_NAME}
 * @return ${CLASS_NAME}
 */
public function set${NAME}(#if (${SCALAR_TYPE_HINT})${SCALAR_TYPE_HINT} #else#end$prm${CAPITALIZED_PARAM_NAME})#if(${RETURN_TYPE}): ${CLASS_NAME}#else#end
{
    $this->${FIELD_NAME} = $prm${CAPITALIZED_PARAM_NAME};

    return $this;
}
