<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceRequest extends Model
{
    /**
     * @description The size of the data disk, in GB.
     *
     * This parameter is required.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $maxConnectionLimit;

    /**
     * @description The information about the storage resources of the cluster.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'instanceId'         => 'InstanceId',
        'maxConnectionLimit' => 'MaxConnectionLimit',
        'pageNumber'         => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxConnectionLimit) {
            $res['MaxConnectionLimit'] = $this->maxConnectionLimit;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxConnectionLimit'])) {
            $model->maxConnectionLimit = $map['MaxConnectionLimit'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
