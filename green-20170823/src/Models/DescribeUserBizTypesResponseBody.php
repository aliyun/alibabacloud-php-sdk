<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeUserBizTypesResponseBody\bizTypeList;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeUserBizTypesResponseBody\bizTypeListImport;
use AlibabaCloud\Tea\Model;

class DescribeUserBizTypesResponseBody extends Model
{
    /**
     * @var bizTypeList[]
     */
    public $bizTypeList;

    /**
     * @var bizTypeListImport[]
     */
    public $bizTypeListImport;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bizTypeList'       => 'BizTypeList',
        'bizTypeListImport' => 'BizTypeListImport',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizTypeList) {
            $res['BizTypeList'] = [];
            if (null !== $this->bizTypeList && \is_array($this->bizTypeList)) {
                $n = 0;
                foreach ($this->bizTypeList as $item) {
                    $res['BizTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizTypeListImport) {
            $res['BizTypeListImport'] = [];
            if (null !== $this->bizTypeListImport && \is_array($this->bizTypeListImport)) {
                $n = 0;
                foreach ($this->bizTypeListImport as $item) {
                    $res['BizTypeListImport'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserBizTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizTypeList'])) {
            if (!empty($map['BizTypeList'])) {
                $model->bizTypeList = [];
                $n                  = 0;
                foreach ($map['BizTypeList'] as $item) {
                    $model->bizTypeList[$n++] = null !== $item ? bizTypeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BizTypeListImport'])) {
            if (!empty($map['BizTypeListImport'])) {
                $model->bizTypeListImport = [];
                $n                        = 0;
                foreach ($map['BizTypeListImport'] as $item) {
                    $model->bizTypeListImport[$n++] = null !== $item ? bizTypeListImport::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
