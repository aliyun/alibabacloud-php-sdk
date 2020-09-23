<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterConfigurationRequest\customizeConfig;
use AlibabaCloud\Tea\Model;

class ModifyClusterConfigurationRequest extends Model
{
    /**
     * @description 集群ID。
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 自定配置。
     *
     * @var customizeConfig
     */
    public $customizeConfig;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'customizeConfig' => 'customize_config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->customizeConfig) {
            $res['customize_config'] = null !== $this->customizeConfig ? $this->customizeConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['customize_config'])) {
            $model->customizeConfig = customizeConfig::fromMap($map['customize_config']);
        }

        return $model;
    }
}
