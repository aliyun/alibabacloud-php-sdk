<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyUsageResponseBody\verifyUsageList;
use AlibabaCloud\Tea\Model;

class DescribeVerifyUsageResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var verifyUsageList[]
     */
    public $verifyUsageList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'totalCount'      => 'TotalCount',
        'verifyUsageList' => 'VerifyUsageList',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->verifyUsageList) {
            $res['VerifyUsageList'] = [];
            if (null !== $this->verifyUsageList && \is_array($this->verifyUsageList)) {
                $n = 0;
                foreach ($this->verifyUsageList as $item) {
                    $res['VerifyUsageList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeVerifyUsageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['VerifyUsageList'])) {
            if (!empty($map['VerifyUsageList'])) {
                $model->verifyUsageList = [];
                $n                      = 0;
                foreach ($map['VerifyUsageList'] as $item) {
                    $model->verifyUsageList[$n++] = null !== $item ? verifyUsageList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
