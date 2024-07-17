<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetIndexOnlineStrategyResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The index change rate.
     *
     * @example 20
     *
     * @var int
     */
    public $changeRate;
    protected $_name = [
        'changeRate' => 'changeRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeRate) {
            $res['changeRate'] = $this->changeRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['changeRate'])) {
            $model->changeRate = $map['changeRate'];
        }

        return $model;
    }
}
