<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEnsEipAddressesRequest extends Model
{
    /**
     * @description 要查询的EIP实例的ID。  最多支持输入50个EIP实例ID，实例ID之间用逗号（,）分隔。
     *
     * @var string
     */
    public $allocationId;

    /**
     * @var string
     */
    public $associatedInstanceId;

    /**
     * @var string
     */
    public $associatedInstanceType;

    /**
     * @description 要查询的EIP的IP地址。  最多支持输入50个EIP的IP地址，IP地址之间用逗号（,）分隔。
     *
     * @var string
     */
    public $eipAddress;

    /**
     * @description ENS节点ID
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description 列表的页码，默认值为1。
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页查询时每页的行数，最大值为100，默认值为10。
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'allocationId'           => 'AllocationId',
        'associatedInstanceId'   => 'AssociatedInstanceId',
        'associatedInstanceType' => 'AssociatedInstanceType',
        'eipAddress'             => 'EipAddress',
        'ensRegionId'            => 'EnsRegionId',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->associatedInstanceId) {
            $res['AssociatedInstanceId'] = $this->associatedInstanceId;
        }
        if (null !== $this->associatedInstanceType) {
            $res['AssociatedInstanceType'] = $this->associatedInstanceType;
        }
        if (null !== $this->eipAddress) {
            $res['EipAddress'] = $this->eipAddress;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsEipAddressesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['AssociatedInstanceId'])) {
            $model->associatedInstanceId = $map['AssociatedInstanceId'];
        }
        if (isset($map['AssociatedInstanceType'])) {
            $model->associatedInstanceType = $map['AssociatedInstanceType'];
        }
        if (isset($map['EipAddress'])) {
            $model->eipAddress = $map['EipAddress'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
