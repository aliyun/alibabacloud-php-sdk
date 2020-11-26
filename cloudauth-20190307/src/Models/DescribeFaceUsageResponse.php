<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeFaceUsageResponse\faceUsageList;
use AlibabaCloud\Tea\Model;

class DescribeFaceUsageResponse extends Model
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
     * @var faceUsageList[]
     */
    public $faceUsageList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
        'faceUsageList' => 'FaceUsageList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('faceUsageList', $this->faceUsageList, true);
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
        if (null !== $this->faceUsageList) {
            $res['FaceUsageList'] = [];
            if (null !== $this->faceUsageList && \is_array($this->faceUsageList)) {
                $n = 0;
                foreach ($this->faceUsageList as $item) {
                    $res['FaceUsageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFaceUsageResponse
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
        if (isset($map['FaceUsageList'])) {
            if (!empty($map['FaceUsageList'])) {
                $model->faceUsageList = [];
                $n                    = 0;
                foreach ($map['FaceUsageList'] as $item) {
                    $model->faceUsageList[$n++] = null !== $item ? faceUsageList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
