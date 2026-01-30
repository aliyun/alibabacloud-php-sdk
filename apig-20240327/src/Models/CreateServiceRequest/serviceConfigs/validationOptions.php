<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceRequest\serviceConfigs;

use AlibabaCloud\Dara\Model;

class validationOptions extends Model
{
    /**
     * @var bool
     */
    public $skipVerifyAIChatCompletion;
    protected $_name = [
        'skipVerifyAIChatCompletion' => 'skipVerifyAIChatCompletion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skipVerifyAIChatCompletion) {
            $res['skipVerifyAIChatCompletion'] = $this->skipVerifyAIChatCompletion;
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
        if (isset($map['skipVerifyAIChatCompletion'])) {
            $model->skipVerifyAIChatCompletion = $map['skipVerifyAIChatCompletion'];
        }

        return $model;
    }
}
