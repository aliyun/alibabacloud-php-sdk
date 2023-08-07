<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeEcGrantRelationRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     *   If you set **InstanceType** to **VBR**, specify a VBR ID.
     *   If you set **InstanceType** to **VPC**, specify a VPC ID.
     *
     * @example vbr-bp12mw1f8k3jgygk9****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of instance. Valid values:
     *
     *   **VBR**: queries the permissions that are granted to a VBR.
     *   **VPC**: queries the permissions that are granted from a VPC.
     *
     * @example VBR
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: **50**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region where the instance is deployed.
     *
     *   If **InstanceType** is set to **VBR**, this parameter is required.
     *   If **InstanceType** is set to **VPC**, you can ignore this parameter.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vbrRegionNo;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'vbrRegionNo'  => 'VbrRegionNo',
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
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->vbrRegionNo) {
            $res['VbrRegionNo'] = $this->vbrRegionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEcGrantRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['VbrRegionNo'])) {
            $model->vbrRegionNo = $map['VbrRegionNo'];
        }

        return $model;
    }
}
