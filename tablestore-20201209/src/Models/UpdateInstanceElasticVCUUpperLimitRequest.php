<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceElasticVCUUpperLimitRequest extends Model
{
    /**
     * @description The upper limit for the VCUs of the instance.
     *
     * >  Valid values of the upper limit for the VCUs of an instance: **Number of reserved VCUs+0.1 to 2000**. You can upgrade or downgrade configurations to modify the number of reserved VCUs by increments or decrements of 1. You can dynamically modify the upper limit for the VCUs of an instance by increments or decrements of 0.1
     *
     * This parameter is required.
     * @example 6
     *
     * @var float
     */
    public $elasticVCUUpperLimit;

    /**
     * @description The name of the instance.
     *
     * This parameter is required.
     * @example workshop-bj-ots1
     *
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'elasticVCUUpperLimit' => 'ElasticVCUUpperLimit',
        'instanceName'         => 'InstanceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticVCUUpperLimit) {
            $res['ElasticVCUUpperLimit'] = $this->elasticVCUUpperLimit;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceElasticVCUUpperLimitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticVCUUpperLimit'])) {
            $model->elasticVCUUpperLimit = $map['ElasticVCUUpperLimit'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}
