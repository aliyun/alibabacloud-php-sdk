<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeContainerServiceK8sClusterKritisStatusRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example c0e9efc6dea5f41db93b7e977123c****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The source IP address.
     *
     * @example 119.145.XXX.XXX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceIp' => 'SourceIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerServiceK8sClusterKritisStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
