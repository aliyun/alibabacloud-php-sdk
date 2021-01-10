<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\manualScoreInfoList\manualScoreInfo;
use AlibabaCloud\Tea\Model;

class manualScoreInfoList extends Model
{
    /**
     * @var manualScoreInfo[]
     */
    public $manualScoreInfo;
    protected $_name = [
        'manualScoreInfo' => 'ManualScoreInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->manualScoreInfo) {
            $res['ManualScoreInfo'] = [];
            if (null !== $this->manualScoreInfo && \is_array($this->manualScoreInfo)) {
                $n = 0;
                foreach ($this->manualScoreInfo as $item) {
                    $res['ManualScoreInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return manualScoreInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ManualScoreInfo'])) {
            if (!empty($map['ManualScoreInfo'])) {
                $model->manualScoreInfo = [];
                $n                      = 0;
                foreach ($map['ManualScoreInfo'] as $item) {
                    $model->manualScoreInfo[$n++] = null !== $item ? manualScoreInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
