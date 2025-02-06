<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultToReviewResponseBody\data\manualScoreInfoList\manualScoreInfo;

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
        if (\is_array($this->manualScoreInfo)) {
            Model::validateArray($this->manualScoreInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->manualScoreInfo) {
            if (\is_array($this->manualScoreInfo)) {
                $res['ManualScoreInfo'] = [];
                $n1                     = 0;
                foreach ($this->manualScoreInfo as $item1) {
                    $res['ManualScoreInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ManualScoreInfo'])) {
            if (!empty($map['ManualScoreInfo'])) {
                $model->manualScoreInfo = [];
                $n1                     = 0;
                foreach ($map['ManualScoreInfo'] as $item1) {
                    $model->manualScoreInfo[$n1++] = manualScoreInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
