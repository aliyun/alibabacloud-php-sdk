<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeHaVipsRequest extends Model
{
    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string[]
     */
    public $ensRegionIds;

    /**
     * @var string
     */
    public $haVipAddress;

    /**
     * @var string
     */
    public $haVipId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
        'ensRegionIds' => 'EnsRegionIds',
        'haVipAddress' => 'HaVipAddress',
        'haVipId' => 'HaVipId',
        'name' => 'Name',
        'networkId' => 'NetworkId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
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

        if (null !== $this->haVipAddress) {
            $res['HaVipAddress'] = $this->haVipAddress;
        }

        if (null !== $this->haVipId) {
            $res['HaVipId'] = $this->haVipId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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

        if (isset($map['HaVipAddress'])) {
            $model->haVipAddress = $map['HaVipAddress'];
        }

        if (isset($map['HaVipId'])) {
            $model->haVipId = $map['HaVipId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
