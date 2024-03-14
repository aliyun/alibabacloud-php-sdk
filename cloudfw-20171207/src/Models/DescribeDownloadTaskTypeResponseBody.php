<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDownloadTaskTypeResponseBody\taskTypeArray;
use AlibabaCloud\Tea\Model;

class DescribeDownloadTaskTypeResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example B835494C-D093-5524-BBDE-BD272077B40E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task types.
     *
     * @var taskTypeArray[]
     */
    public $taskTypeArray;

    /**
     * @description The total number of entries returned.
     *
     * @example 3
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'     => 'RequestId',
        'taskTypeArray' => 'TaskTypeArray',
        'totalCount'    => 'TotalCount',
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
        if (null !== $this->taskTypeArray) {
            $res['TaskTypeArray'] = [];
            if (null !== $this->taskTypeArray && \is_array($this->taskTypeArray)) {
                $n = 0;
                foreach ($this->taskTypeArray as $item) {
                    $res['TaskTypeArray'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDownloadTaskTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskTypeArray'])) {
            if (!empty($map['TaskTypeArray'])) {
                $model->taskTypeArray = [];
                $n                    = 0;
                foreach ($map['TaskTypeArray'] as $item) {
                    $model->taskTypeArray[$n++] = null !== $item ? taskTypeArray::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
