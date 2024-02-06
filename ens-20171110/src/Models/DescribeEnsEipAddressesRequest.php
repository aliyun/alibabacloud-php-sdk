<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEnsEipAddressesRequest extends Model
{
    /**
     * @description The ID of the EIP that you want to query. You can specify up to 50 EIP IDs. Separate multiple IDs with commas (,).
     *
     * @example eip-5q9uwkd9bznjpxz8hr6cirnjk
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The ID of the instance with which you want to associate the EIP.
     *
     * @example lb-5t18quoohsrc3xkf86spmnu77
     *
     * @var string
     */
    public $associatedInstanceId;

    /**
     * @description The type of the instance with which you want to associate the EIP. Valid values:
     *
     *   **EnsInstance**: ENS instance in a VPC
     *   **SlbInstance**: Edge Load Balancer (ELB) instance
     *
     * @example SlbInstance
     *
     * @var string
     */
    public $associatedInstanceType;

    /**
     * @description The EIP that you want to query. You can specify up to 50 EIPs. Separate multiple EIPs with commas (,).
     *
     * @example 192.168.0.1
     *
     * @var string
     */
    public $eipAddress;

    /**
     * @description The name of the EIP.
     *
     * @example test
     *
     * @var string
     */
    public $eipName;

    /**
     * @description The ID of the Edge Node Service (ENS) node.
     *
     * @example cn-chengdu-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: 100. Default value: 10.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether the EIP is a secondary EIP. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $standby;
    protected $_name = [
        'allocationId'           => 'AllocationId',
        'associatedInstanceId'   => 'AssociatedInstanceId',
        'associatedInstanceType' => 'AssociatedInstanceType',
        'eipAddress'             => 'EipAddress',
        'eipName'                => 'EipName',
        'ensRegionId'            => 'EnsRegionId',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'standby'                => 'Standby',
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
        if (null !== $this->eipName) {
            $res['EipName'] = $this->eipName;
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
        if (null !== $this->standby) {
            $res['Standby'] = $this->standby;
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
        if (isset($map['EipName'])) {
            $model->eipName = $map['EipName'];
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
        if (isset($map['Standby'])) {
            $model->standby = $map['Standby'];
        }

        return $model;
    }
}
