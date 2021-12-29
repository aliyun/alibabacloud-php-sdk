<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class CreateAppTemplateRequest extends Model
{
    /**
     * @description 应用模板名称
     *
     * @var string
     */
    public $appTemplateName;

    /**
     * @description 组件列表
     *
     * @var string[]
     */
    public $componentList;

    /**
     * @description 集成方式（一体化SDK：paasSDK，样板间：standardRoom）
     *
     * @var string
     */
    public $integrationMode;

    /**
     * @description 应用模板场景，电商business，课堂classroom
     *
     * @var string
     */
    public $scene;
    protected $_name = [
        'appTemplateName' => 'AppTemplateName',
        'componentList'   => 'ComponentList',
        'integrationMode' => 'IntegrationMode',
        'scene'           => 'Scene',
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
        if (null !== $this->componentList) {
            $res['ComponentList'] = $this->componentList;
        }
        if (null !== $this->integrationMode) {
            $res['IntegrationMode'] = $this->integrationMode;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppTemplateName'])) {
            $model->appTemplateName = $map['AppTemplateName'];
        }
        if (isset($map['ComponentList'])) {
            if (!empty($map['ComponentList'])) {
                $model->componentList = $map['ComponentList'];
            }
        }
        if (isset($map['IntegrationMode'])) {
            $model->integrationMode = $map['IntegrationMode'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        return $model;
    }
}
