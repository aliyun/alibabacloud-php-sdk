<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetTaskFileResultListResponseBody;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetTaskFileResultListResponseBody\data\taskResultReviewInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var taskResultReviewInfo[]
     */
    public $taskResultReviewInfo;
    protected $_name = [
        'taskResultReviewInfo' => 'TaskResultReviewInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskResultReviewInfo) {
            $res['TaskResultReviewInfo'] = [];
            if (null !== $this->taskResultReviewInfo && \is_array($this->taskResultReviewInfo)) {
                $n = 0;
                foreach ($this->taskResultReviewInfo as $item) {
                    $res['TaskResultReviewInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TaskResultReviewInfo'])) {
            if (!empty($map['TaskResultReviewInfo'])) {
                $model->taskResultReviewInfo = [];
                $n                           = 0;
                foreach ($map['TaskResultReviewInfo'] as $item) {
                    $model->taskResultReviewInfo[$n++] = null !== $item ? taskResultReviewInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
