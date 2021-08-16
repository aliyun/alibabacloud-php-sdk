<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class CreateAppTemplateShrinkRequest extends Model
{
    /**
     * @description 应用模板名称
     *
     * @var string
     */
    public $appTemplateName;

    /**
     * @description 应用模板场景，电商business，课堂classroom
     *
     * @var string
     */
    public $sence;

    /**
     * @description 组件列表
     *
     * @var string
     */
    public $componentListShrink;
    protected $_name = [
        'appTemplateName'     => 'AppTemplateName',
        'sence'               => 'Sence',
        'componentListShrink' => 'ComponentList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appTemplateName) {
            $res['AppTemplateName'] = $this->appTemplateName;
        }
        if (null !== $this->sence) {
            $res['Sence'] = $this->sence;
        }
        if (null !== $this->componentListShrink) {
            $res['ComponentList'] = $this->componentListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppTemplateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppTemplateName'])) {
            $model->appTemplateName = $map['AppTemplateName'];
        }
        if (isset($map['Sence'])) {
            $model->sence = $map['Sence'];
        }
        if (isset($map['ComponentList'])) {
            $model->componentListShrink = $map['ComponentList'];
        }

        return $model;
    }
}
