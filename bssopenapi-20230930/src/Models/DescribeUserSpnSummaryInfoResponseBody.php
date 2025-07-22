<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeUserSpnSummaryInfoResponseBody\regionList;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeUserSpnSummaryInfoResponseBody\spnCodeAndTypeList;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceFamilyList) {
            $res['InstanceFamilyList'] = $this->instanceFamilyList;
        }
        if (null !== $this->regionList) {
            $res['RegionList'] = [];
            if (null !== $this->regionList && \is_array($this->regionList)) {
                $n = 0;
                foreach ($this->regionList as $item) {
                    $res['RegionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spnCodeAndTypeList) {
            $res['SpnCodeAndTypeList'] = [];
            if (null !== $this->spnCodeAndTypeList && \is_array($this->spnCodeAndTypeList)) {
                $n = 0;
                foreach ($this->spnCodeAndTypeList as $item) {
                    $res['SpnCodeAndTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserSpnSummaryInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceFamilyList'])) {
            if (!empty($map['InstanceFamilyList'])) {
                $model->instanceFamilyList = $map['InstanceFamilyList'];
            }
        }
        if (isset($map['RegionList'])) {
            if (!empty($map['RegionList'])) {
                $model->regionList = [];
                $n = 0;
                foreach ($map['RegionList'] as $item) {
                    $model->regionList[$n++] = null !== $item ? regionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpnCodeAndTypeList'])) {
            if (!empty($map['SpnCodeAndTypeList'])) {
                $model->spnCodeAndTypeList = [];
                $n = 0;
                foreach ($map['SpnCodeAndTypeList'] as $item) {
                    $model->spnCodeAndTypeList[$n++] = null !== $item ? spnCodeAndTypeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
