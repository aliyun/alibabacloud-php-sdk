<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyUsageResponse\verifyUsageList;
use AlibabaCloud\Tea\Model;

class DescribeVerifyUsageResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var verifyUsageList[]
     */
    public $verifyUsageList;
    protected $_name = [
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
        'verifyUsageList' => 'VerifyUsageList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('verifyUsageList', $this->verifyUsageList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVerifyUsageResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
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

        return $model;
    }
}
