<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateClusterConfigsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1234
     *
     * @var int
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example SPARK_CONF
     *
     * @var string
     */
    public $configType;

    /**
     * @description This parameter is required.
     *
     * @var ClusterConfig[]
     */
    public $configValues;

    /**
     * @description This parameter is required.
     *
     * @example 5678
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'configType'   => 'ConfigType',
        'configValues' => 'ConfigValues',
        'projectId'    => 'ProjectId',
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
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }
        if (null !== $this->configValues) {
            $res['ConfigValues'] = [];
            if (null !== $this->configValues && \is_array($this->configValues)) {
                $n = 0;
                foreach ($this->configValues as $item) {
                    $res['ConfigValues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateClusterConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }
        if (isset($map['ConfigValues'])) {
            if (!empty($map['ConfigValues'])) {
                $model->configValues = [];
                $n                   = 0;
                foreach ($map['ConfigValues'] as $item) {
                    $model->configValues[$n++] = null !== $item ? ClusterConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
