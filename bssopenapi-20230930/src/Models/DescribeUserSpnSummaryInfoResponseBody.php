<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeUserSpnSummaryInfoResponseBody\regionList;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeUserSpnSummaryInfoResponseBody\spnCodeAndTypeList;

class DescribeUserSpnSummaryInfoResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $instanceFamilyList;

    /**
     * @var regionList[]
     */
    public $regionList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var spnCodeAndTypeList[]
     */
    public $spnCodeAndTypeList;
    protected $_name = [
        'instanceFamilyList' => 'InstanceFamilyList',
        'regionList' => 'RegionList',
        'requestId' => 'RequestId',
        'spnCodeAndTypeList' => 'SpnCodeAndTypeList',
    ];

    public function validate()
    {
        if (\is_array($this->instanceFamilyList)) {
            Model::validateArray($this->instanceFamilyList);
        }
        if (\is_array($this->regionList)) {
            Model::validateArray($this->regionList);
        }
        if (\is_array($this->spnCodeAndTypeList)) {
            Model::validateArray($this->spnCodeAndTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceFamilyList) {
            if (\is_array($this->instanceFamilyList)) {
                $res['InstanceFamilyList'] = [];
                $n1 = 0;
                foreach ($this->instanceFamilyList as $item1) {
                    $res['InstanceFamilyList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionList) {
            if (\is_array($this->regionList)) {
                $res['RegionList'] = [];
                $n1 = 0;
                foreach ($this->regionList as $item1) {
                    $res['RegionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->spnCodeAndTypeList) {
            if (\is_array($this->spnCodeAndTypeList)) {
                $res['SpnCodeAndTypeList'] = [];
                $n1 = 0;
                foreach ($this->spnCodeAndTypeList as $item1) {
                    $res['SpnCodeAndTypeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InstanceFamilyList'])) {
            if (!empty($map['InstanceFamilyList'])) {
                $model->instanceFamilyList = [];
                $n1 = 0;
                foreach ($map['InstanceFamilyList'] as $item1) {
                    $model->instanceFamilyList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionList'])) {
            if (!empty($map['RegionList'])) {
                $model->regionList = [];
                $n1 = 0;
                foreach ($map['RegionList'] as $item1) {
                    $model->regionList[$n1] = regionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SpnCodeAndTypeList'])) {
            if (!empty($map['SpnCodeAndTypeList'])) {
                $model->spnCodeAndTypeList = [];
                $n1 = 0;
                foreach ($map['SpnCodeAndTypeList'] as $item1) {
                    $model->spnCodeAndTypeList[$n1] = spnCodeAndTypeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
