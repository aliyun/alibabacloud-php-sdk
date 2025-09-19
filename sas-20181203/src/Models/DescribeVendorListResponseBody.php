<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeVendorListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $vendorNameList;
    protected $_name = [
        'requestId' => 'RequestId',
        'vendorNameList' => 'VendorNameList',
    ];

    public function validate()
    {
        if (\is_array($this->vendorNameList)) {
            Model::validateArray($this->vendorNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vendorNameList) {
            if (\is_array($this->vendorNameList)) {
                $res['VendorNameList'] = [];
                $n1 = 0;
                foreach ($this->vendorNameList as $item1) {
                    $res['VendorNameList'][$n1] = $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VendorNameList'])) {
            if (!empty($map['VendorNameList'])) {
                $model->vendorNameList = [];
                $n1 = 0;
                foreach ($map['VendorNameList'] as $item1) {
                    $model->vendorNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
