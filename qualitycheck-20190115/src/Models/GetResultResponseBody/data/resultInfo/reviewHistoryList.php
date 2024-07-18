<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\reviewHistoryList\reviewHistory;
use AlibabaCloud\Tea\Model;

class reviewHistoryList extends Model
{
    /**
     * @var reviewHistory[]
     */
    public $reviewHistory;
    protected $_name = [
        'reviewHistory' => 'ReviewHistory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reviewHistory) {
            $res['ReviewHistory'] = [];
            if (null !== $this->reviewHistory && \is_array($this->reviewHistory)) {
                $n = 0;
                foreach ($this->reviewHistory as $item) {
                    $res['ReviewHistory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reviewHistoryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReviewHistory'])) {
            if (!empty($map['ReviewHistory'])) {
                $model->reviewHistory = [];
                $n                    = 0;
                foreach ($map['ReviewHistory'] as $item) {
                    $model->reviewHistory[$n++] = null !== $item ? reviewHistory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
