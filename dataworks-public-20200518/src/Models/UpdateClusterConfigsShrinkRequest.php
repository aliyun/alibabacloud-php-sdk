<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateClusterConfigsShrinkRequest extends Model
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
     * @var string
     */
    public $configValuesShrink;

    /**
     * @description This parameter is required.
     *
     * @example 5678
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'clusterId'          => 'ClusterId',
        'configType'         => 'ConfigType',
        'configValuesShrink' => 'ConfigValues',
        'projectId'          => 'ProjectId',
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
        if (null !== $this->configValuesShrink) {
            $res['ConfigValues'] = $this->configValuesShrink;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateClusterConfigsShrinkRequest
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
            $model->configValuesShrink = $map['ConfigValues'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
