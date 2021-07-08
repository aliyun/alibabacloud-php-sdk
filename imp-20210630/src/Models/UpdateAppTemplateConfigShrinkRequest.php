<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppTemplateConfigShrinkRequest extends Model
{
    /**
     * @description 应用模板唯一标识
     *
     * @var string
     */
    public $appTemplateId;

    /**
     * @description 更新配置
     *
     * @var string
     */
    public $configListShrink;
    protected $_name = [
        'appTemplateId'    => 'AppTemplateId',
        'configListShrink' => 'ConfigList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appTemplateId) {
            $res['AppTemplateId'] = $this->appTemplateId;
        }
        if (null !== $this->configListShrink) {
            $res['ConfigList'] = $this->configListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppTemplateConfigShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppTemplateId'])) {
            $model->appTemplateId = $map['AppTemplateId'];
        }
        if (isset($map['ConfigList'])) {
            $model->configListShrink = $map['ConfigList'];
        }

        return $model;
    }
}
