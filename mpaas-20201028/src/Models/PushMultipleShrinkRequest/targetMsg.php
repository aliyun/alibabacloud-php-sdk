<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\PushMultipleShrinkRequest;

use AlibabaCloud\Dara\Model;

class targetMsg extends Model
{
    /**
     * @var string
     */
    public $extendedParams;

    /**
     * @var string
     */
    public $msgKey;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $templateKeyValue;
    protected $_name = [
        'extendedParams' => 'ExtendedParams',
        'msgKey' => 'MsgKey',
        'target' => 'Target',
        'templateKeyValue' => 'TemplateKeyValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extendedParams) {
            $res['ExtendedParams'] = $this->extendedParams;
        }

        if (null !== $this->msgKey) {
            $res['MsgKey'] = $this->msgKey;
        }

        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        if (null !== $this->templateKeyValue) {
            $res['TemplateKeyValue'] = $this->templateKeyValue;
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
        if (isset($map['ExtendedParams'])) {
            $model->extendedParams = $map['ExtendedParams'];
        }

        if (isset($map['MsgKey'])) {
            $model->msgKey = $map['MsgKey'];
        }

        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        if (isset($map['TemplateKeyValue'])) {
            $model->templateKeyValue = $map['TemplateKeyValue'];
        }

        return $model;
    }
}
