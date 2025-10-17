<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\ListJobStepResponseBody\jobSteps;

use AlibabaCloud\Dara\Model;

class errorDetails extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $helpUrl;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'helpUrl' => 'HelpUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->helpUrl) {
            $res['HelpUrl'] = $this->helpUrl;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['HelpUrl'])) {
            $model->helpUrl = $map['HelpUrl'];
        }

        return $model;
    }
}
