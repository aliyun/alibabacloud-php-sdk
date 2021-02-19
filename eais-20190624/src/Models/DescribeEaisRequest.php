<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\Tea\Model;

class DescribeEaisRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $elasticAcceleratedInstanceIds;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'regionId'                      => 'RegionId',
        'elasticAcceleratedInstanceIds' => 'ElasticAcceleratedInstanceIds',
        'instanceName'                  => 'InstanceName',
        'status'                        => 'Status',
        'instanceType'                  => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->elasticAcceleratedInstanceIds) {
            $res['ElasticAcceleratedInstanceIds'] = $this->elasticAcceleratedInstanceIds;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEaisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ElasticAcceleratedInstanceIds'])) {
            $model->elasticAcceleratedInstanceIds = $map['ElasticAcceleratedInstanceIds'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
