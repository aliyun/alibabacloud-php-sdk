<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeEnsEipAddressesRequest extends Model
{
    /**
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
     * @var string
     */
    public $eipAddress;

    /**
     * @var string
     */
    public $eipName;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string[]
     */
    public $ensRegionIds;

    /**
     * @var bool
     */
    public $icmpReplyEnabled;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $standby;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'associatedInstanceId' => 'AssociatedInstanceId',
        'associatedInstanceType' => 'AssociatedInstanceType',
        'eipAddress' => 'EipAddress',
        'eipName' => 'EipName',
        'ensRegionId' => 'EnsRegionId',
        'ensRegionIds' => 'EnsRegionIds',
        'icmpReplyEnabled' => 'IcmpReplyEnabled',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'standby' => 'Standby',
    ];

    public function validate()
    {
        if (\is_array($this->ensRegionIds)) {
            Model::validateArray($this->ensRegionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->ensRegionIds) {
            if (\is_array($this->ensRegionIds)) {
                $res['EnsRegionIds'] = [];
                $n1 = 0;
                foreach ($this->ensRegionIds as $item1) {
                    $res['EnsRegionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->icmpReplyEnabled) {
            $res['IcmpReplyEnabled'] = $this->icmpReplyEnabled;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['EnsRegionIds'])) {
            if (!empty($map['EnsRegionIds'])) {
                $model->ensRegionIds = [];
                $n1 = 0;
                foreach ($map['EnsRegionIds'] as $item1) {
                    $model->ensRegionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IcmpReplyEnabled'])) {
            $model->icmpReplyEnabled = $map['IcmpReplyEnabled'];
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
