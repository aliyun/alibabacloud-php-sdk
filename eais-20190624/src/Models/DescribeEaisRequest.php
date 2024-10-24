<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\SDK\Eais\V20190624\Models\DescribeEaisRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeEaisRequest extends Model
{
    /**
     * @var string
     */
    public $clientInstanceId;

    /**
     * @example ["eais-id1", "eais-id2"]
     *
     * @var string
     */
    public $elasticAcceleratedInstanceIds;

    /**
     * @example eais*
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example eais.ei-a6.2xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 200
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example InUse
     *
     * @var string
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clientInstanceId'              => 'ClientInstanceId',
        'elasticAcceleratedInstanceIds' => 'ElasticAcceleratedInstanceIds',
        'instanceName'                  => 'InstanceName',
        'instanceType'                  => 'InstanceType',
        'pageNumber'                    => 'PageNumber',
        'pageSize'                      => 'PageSize',
        'regionId'                      => 'RegionId',
        'resourceGroupId'               => 'ResourceGroupId',
        'status'                        => 'Status',
        'tag'                           => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientInstanceId) {
            $res['ClientInstanceId'] = $this->clientInstanceId;
        }
        if (null !== $this->elasticAcceleratedInstanceIds) {
            $res['ElasticAcceleratedInstanceIds'] = $this->elasticAcceleratedInstanceIds;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ClientInstanceId'])) {
            $model->clientInstanceId = $map['ClientInstanceId'];
        }
        if (isset($map['ElasticAcceleratedInstanceIds'])) {
            $model->elasticAcceleratedInstanceIds = $map['ElasticAcceleratedInstanceIds'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
