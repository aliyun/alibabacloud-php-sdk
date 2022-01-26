<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models\GetDiagnoseResultForSingleCardResponseBody;

use AlibabaCloud\Tea\Model;

class errorResult extends Model
{
    /**
     * @var string
     */
    public $errorDes;

    /**
     * @var string
     */
    public $errorLevel;

    /**
     * @var string
     */
    public $errorPart;

    /**
     * @var string
     */
    public $errorSuggestion;
    protected $_name = [
        'errorDes'        => 'ErrorDes',
        'errorLevel'      => 'ErrorLevel',
        'errorPart'       => 'ErrorPart',
        'errorSuggestion' => 'ErrorSuggestion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorDes) {
            $res['ErrorDes'] = $this->errorDes;
        }
        if (null !== $this->errorLevel) {
            $res['ErrorLevel'] = $this->errorLevel;
        }
        if (null !== $this->errorPart) {
            $res['ErrorPart'] = $this->errorPart;
        }
        if (null !== $this->errorSuggestion) {
            $res['ErrorSuggestion'] = $this->errorSuggestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorDes'])) {
            $model->errorDes = $map['ErrorDes'];
        }
        if (isset($map['ErrorLevel'])) {
            $model->errorLevel = $map['ErrorLevel'];
        }
        if (isset($map['ErrorPart'])) {
            $model->errorPart = $map['ErrorPart'];
        }
        if (isset($map['ErrorSuggestion'])) {
            $model->errorSuggestion = $map['ErrorSuggestion'];
        }

        return $model;
    }
}
