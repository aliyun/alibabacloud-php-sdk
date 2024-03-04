<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\AutofeExperimentConfiguration\odpsConfig;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\AutofeExperimentConfiguration\ossConfig;
use AlibabaCloud\SDK\PaiAutoML\V20220828\Models\AutofeExperimentConfiguration\ymlConfig;
use AlibabaCloud\Tea\Model;

class AutofeExperimentConfiguration extends Model
{
    /**
     * @var odpsConfig
     */
    public $odpsConfig;

    /**
     * @var ossConfig
     */
    public $ossConfig;

    /**
     * @var ymlConfig
     */
    public $ymlConfig;
    protected $_name = [
        'odpsConfig' => 'odps_config',
        'ossConfig'  => 'oss_config',
        'ymlConfig'  => 'yml_config',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->odpsConfig) {
            $res['odps_config'] = null !== $this->odpsConfig ? $this->odpsConfig->toMap() : null;
        }
        if (null !== $this->ossConfig) {
            $res['oss_config'] = null !== $this->ossConfig ? $this->ossConfig->toMap() : null;
        }
        if (null !== $this->ymlConfig) {
            $res['yml_config'] = null !== $this->ymlConfig ? $this->ymlConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AutofeExperimentConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['odps_config'])) {
            $model->odpsConfig = odpsConfig::fromMap($map['odps_config']);
        }
        if (isset($map['oss_config'])) {
            $model->ossConfig = ossConfig::fromMap($map['oss_config']);
        }
        if (isset($map['yml_config'])) {
            $model->ymlConfig = ymlConfig::fromMap($map['yml_config']);
        }

        return $model;
    }
}
