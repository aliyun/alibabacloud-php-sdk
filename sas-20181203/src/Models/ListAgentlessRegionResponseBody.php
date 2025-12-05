<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAgentlessRegionResponseBody\vendorRegionList;

class ListAgentlessRegionResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $regionList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vendorRegionList[]
     */
    public $vendorRegionList;
    protected $_name = [
        'regionList' => 'RegionList',
        'requestId' => 'RequestId',
        'vendorRegionList' => 'VendorRegionList',
    ];

    public function validate()
    {
        if (\is_array($this->regionList)) {
            Model::validateArray($this->regionList);
        }
        if (\is_array($this->vendorRegionList)) {
            Model::validateArray($this->vendorRegionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionList) {
            if (\is_array($this->regionList)) {
                $res['RegionList'] = [];
                $n1 = 0;
                foreach ($this->regionList as $item1) {
                    $res['RegionList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vendorRegionList) {
            if (\is_array($this->vendorRegionList)) {
                $res['VendorRegionList'] = [];
                $n1 = 0;
                foreach ($this->vendorRegionList as $item1) {
                    $res['VendorRegionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RegionList'])) {
            if (!empty($map['RegionList'])) {
                $model->regionList = [];
                $n1 = 0;
                foreach ($map['RegionList'] as $item1) {
                    $model->regionList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VendorRegionList'])) {
            if (!empty($map['VendorRegionList'])) {
                $model->vendorRegionList = [];
                $n1 = 0;
                foreach ($map['VendorRegionList'] as $item1) {
                    $model->vendorRegionList[$n1] = vendorRegionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
