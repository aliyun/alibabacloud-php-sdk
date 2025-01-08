<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\GetContentDetectResultResponseBody;

use AlibabaCloud\SDK\RAI\V20240701\Models\GetContentDetectResultResponseBody\data\detectResultList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var detectResultList[]
     */
    public $detectResultList;

    /**
     * @example 10
     *
     * @var int
     */
    public $processedCount;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @example 2
     *
     * @var int
     */
    public $taskStatus;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'detectResultList' => 'DetectResultList',
        'processedCount'   => 'ProcessedCount',
        'taskId'           => 'TaskId',
        'taskStatus'       => 'TaskStatus',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detectResultList) {
            $res['DetectResultList'] = [];
            if (null !== $this->detectResultList && \is_array($this->detectResultList)) {
                $n = 0;
                foreach ($this->detectResultList as $item) {
                    $res['DetectResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->processedCount) {
            $res['ProcessedCount'] = $this->processedCount;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetectResultList'])) {
            if (!empty($map['DetectResultList'])) {
                $model->detectResultList = [];
                $n                       = 0;
                foreach ($map['DetectResultList'] as $item) {
                    $model->detectResultList[$n++] = null !== $item ? detectResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProcessedCount'])) {
            $model->processedCount = $map['ProcessedCount'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
