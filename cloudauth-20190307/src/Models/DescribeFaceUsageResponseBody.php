<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceUsageResponseBody\faceUsageList;
use AlibabaCloud\Tea\Model;

class DescribeFaceUsageResponseBody extends Model
{
    /**
     * @var faceUsageList[]
     */
    public $faceUsageList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'faceUsageList' => 'FaceUsageList',
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceUsageList) {
            $res['FaceUsageList'] = [];
            if (null !== $this->faceUsageList && \is_array($this->faceUsageList)) {
                $n = 0;
                foreach ($this->faceUsageList as $item) {
                    $res['FaceUsageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFaceUsageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceUsageList'])) {
            if (!empty($map['FaceUsageList'])) {
                $model->faceUsageList = [];
                $n                    = 0;
                foreach ($map['FaceUsageList'] as $item) {
                    $model->faceUsageList[$n++] = null !== $item ? faceUsageList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
