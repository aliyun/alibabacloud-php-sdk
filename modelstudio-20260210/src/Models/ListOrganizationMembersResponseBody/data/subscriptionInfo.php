<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListOrganizationMembersResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\ListOrganizationMembersResponseBody\data\subscriptionInfo\equityList;

class subscriptionInfo extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var equityList[]
     */
    public $equityList;

    /**
     * @var string
     */
    public $instanceCode;

    /**
     * @var string
     */
    public $payMode;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $specType;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime' => 'EndTime',
        'equityList' => 'EquityList',
        'instanceCode' => 'InstanceCode',
        'payMode' => 'PayMode',
        'productCode' => 'ProductCode',
        'specType' => 'SpecType',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->equityList)) {
            Model::validateArray($this->equityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->equityList) {
            if (\is_array($this->equityList)) {
                $res['EquityList'] = [];
                $n1 = 0;
                foreach ($this->equityList as $item1) {
                    $res['EquityList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceCode) {
            $res['InstanceCode'] = $this->instanceCode;
        }

        if (null !== $this->payMode) {
            $res['PayMode'] = $this->payMode;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EquityList'])) {
            if (!empty($map['EquityList'])) {
                $model->equityList = [];
                $n1 = 0;
                foreach ($map['EquityList'] as $item1) {
                    $model->equityList[$n1] = equityList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceCode'])) {
            $model->instanceCode = $map['InstanceCode'];
        }

        if (isset($map['PayMode'])) {
            $model->payMode = $map['PayMode'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
