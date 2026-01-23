<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardTemplateResponseBody\templateInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStandardTemplateResponseBody\templateInfo\codeRuleConfig\autoConfig;

class codeRuleConfig extends Model
{
    /**
     * @var autoConfig
     */
    public $autoConfig;

    /**
     * @var string
     */
    public $generateType;
    protected $_name = [
        'autoConfig' => 'AutoConfig',
        'generateType' => 'GenerateType',
    ];

    public function validate()
    {
        if (null !== $this->autoConfig) {
            $this->autoConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoConfig) {
            $res['AutoConfig'] = null !== $this->autoConfig ? $this->autoConfig->toArray($noStream) : $this->autoConfig;
        }

        if (null !== $this->generateType) {
            $res['GenerateType'] = $this->generateType;
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
        if (isset($map['AutoConfig'])) {
            $model->autoConfig = autoConfig::fromMap($map['AutoConfig']);
        }

        if (isset($map['GenerateType'])) {
            $model->generateType = $map['GenerateType'];
        }

        return $model;
    }
}
