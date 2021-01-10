<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\manualScoreInfoList\manualScoreInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\manualScoreInfoList\manualScoreInfo\complainHistories\complainHistories;
use AlibabaCloud\Tea\Model;

class complainHistories extends Model
{
    /**
     * @var complainHistories[]
     */
    public $complainHistories;
    protected $_name = [
        'complainHistories' => 'ComplainHistories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complainHistories) {
            $res['ComplainHistories'] = [];
            if (null !== $this->complainHistories && \is_array($this->complainHistories)) {
                $n = 0;
                foreach ($this->complainHistories as $item) {
                    $res['ComplainHistories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return complainHistories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplainHistories'])) {
            if (!empty($map['ComplainHistories'])) {
                $model->complainHistories = [];
                $n                        = 0;
                foreach ($map['ComplainHistories'] as $item) {
                    $model->complainHistories[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
