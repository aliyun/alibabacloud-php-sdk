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
    public $scene;

    /**
     * @description 集成方式（一体化SDK：paasSDK，样板间：standardRoom）
     *
     * @var string
     */
    public $integrationMode;

    /**
     * @description 组件列表
     *
     * @var string
     */
    public $componentListShrink;
    protected $_name = [
        'appTemplateName'     => 'AppTemplateName',
        'scene'               => 'Scene',
        'integrationMode'     => 'IntegrationMode',
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
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->integrationMode) {
            $res['IntegrationMode'] = $this->integrationMode;
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
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['IntegrationMode'])) {
            $model->integrationMode = $map['IntegrationMode'];
        }
        if (isset($map['ComponentList'])) {
            $model->componentListShrink = $map['ComponentList'];
        }

        return $model;
    }
}
