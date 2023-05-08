<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVendorListResponseBody extends Model
{
    /**
     * @example 340D7FC4-D575-1661-8ACD-CFA7BE57B795
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $vendorNameList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'vendorNameList' => 'VendorNameList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vendorNameList) {
            $res['VendorNameList'] = $this->vendorNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVendorListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VendorNameList'])) {
            if (!empty($map['VendorNameList'])) {
                $model->vendorNameList = $map['VendorNameList'];
            }
        }

        return $model;
    }
}
