<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components\buttons;

use AlibabaCloud\Tea\Model;

class extendAttrs extends Model
{
    /**
     * @description 事件类型
     *
     * @example nextCard
     *
     * @var string
     */
    public $action;

    /**
     * @description 意图编码
     *
     * @example test
     *
     * @var string
     */
    public $intentCode;

    /**
     * @description 下一个模板语言
     *
     * @example en
     *
     * @var string
     */
    public $nextLanguageCode;

    /**
     * @description 下一个模板编码
     *
     * @example 20939920093993
     *
     * @var string
     */
    public $nextTemplateCode;

    /**
     * @description 下一个模板名称
     *
     * @example abc
     *
     * @var string
     */
    public $nextTemplateName;
    protected $_name = [
        'action'           => 'Action',
        'intentCode'       => 'IntentCode',
        'nextLanguageCode' => 'NextLanguageCode',
        'nextTemplateCode' => 'NextTemplateCode',
        'nextTemplateName' => 'NextTemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return extendAttrs
     */
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
