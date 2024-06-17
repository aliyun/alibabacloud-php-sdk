<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ModifyIndexOnlineStrategyRequest extends Model
{
    /**
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
     * @return ModifyIndexOnlineStrategyRequest
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
