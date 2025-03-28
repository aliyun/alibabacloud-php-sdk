<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class UpdateClusterConfigsRequest extends Model
{
    /**
     * @var int
     */
    public $clusterId;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var ClusterConfig[]
     */
    public $configValues;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'configType' => 'ConfigType',
        'configValues' => 'ConfigValues',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        if (\is_array($this->configValues)) {
            Model::validateArray($this->configValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }

        if (null !== $this->configValues) {
            if (\is_array($this->configValues)) {
                $res['ConfigValues'] = [];
                $n1 = 0;
                foreach ($this->configValues as $item1) {
                    $res['ConfigValues'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        if (isset($map['ConfigValues'])) {
            if (!empty($map['ConfigValues'])) {
                $model->configValues = [];
                $n1 = 0;
                foreach ($map['ConfigValues'] as $item1) {
                    $model->configValues[$n1++] = ClusterConfig::fromMap($item1);
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
