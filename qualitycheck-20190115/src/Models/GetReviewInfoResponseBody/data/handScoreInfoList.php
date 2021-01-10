<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetReviewInfoResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetReviewInfoResponseBody\data\handScoreInfoList\scorePo;
use AlibabaCloud\Tea\Model;

class handScoreInfoList extends Model
{
    /**
     * @var scorePo[]
     */
    public $scorePo;
    protected $_name = [
        'scorePo' => 'ScorePo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scorePo) {
            $res['ScorePo'] = [];
            if (null !== $this->scorePo && \is_array($this->scorePo)) {
                $n = 0;
                foreach ($this->scorePo as $item) {
                    $res['ScorePo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return handScoreInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScorePo'])) {
            if (!empty($map['ScorePo'])) {
                $model->scorePo = [];
                $n              = 0;
                foreach ($map['ScorePo'] as $item) {
                    $model->scorePo[$n++] = null !== $item ? scorePo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
