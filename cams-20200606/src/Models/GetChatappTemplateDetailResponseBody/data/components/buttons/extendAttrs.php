<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components\buttons;

use AlibabaCloud\Dara\Model;

class extendAttrs extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $intentCode;

    /**
     * @var string
     */
    public $nextLanguageCode;

    /**
     * @var string
     */
    public $nextTemplateCode;

    /**
     * @var string
     */
    public $nextTemplateName;
    protected $_name = [
        'action' => 'Action',
        'intentCode' => 'IntentCode',
        'nextLanguageCode' => 'NextLanguageCode',
        'nextTemplateCode' => 'NextTemplateCode',
        'nextTemplateName' => 'NextTemplateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->intentCode) {
            $res['IntentCode'] = $this->intentCode;
        }

        if (null !== $this->nextLanguageCode) {
            $res['NextLanguageCode'] = $this->nextLanguageCode;
        }

        if (null !== $this->nextTemplateCode) {
            $res['NextTemplateCode'] = $this->nextTemplateCode;
        }

        if (null !== $this->nextTemplateName) {
            $res['NextTemplateName'] = $this->nextTemplateName;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['IntentCode'])) {
            $model->intentCode = $map['IntentCode'];
        }

        if (isset($map['NextLanguageCode'])) {
            $model->nextLanguageCode = $map['NextLanguageCode'];
        }

        if (isset($map['NextTemplateCode'])) {
            $model->nextTemplateCode = $map['NextTemplateCode'];
        }

        if (isset($map['NextTemplateName'])) {
            $model->nextTemplateName = $map['NextTemplateName'];
        }

        return $model;
    }
}
