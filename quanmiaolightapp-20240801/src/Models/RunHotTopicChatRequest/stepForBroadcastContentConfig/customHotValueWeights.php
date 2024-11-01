<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatRequest\stepForBroadcastContentConfig;

use AlibabaCloud\Tea\Model;

class customHotValueWeights extends Model
{
    /**
     * @example comments
     *
     * @var string
     */
    public $dimension;

    /**
     * @example 1
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'dimension' => 'dimension',
        'weight'    => 'weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimension) {
            $res['dimension'] = $this->dimension;
        }
        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customHotValueWeights
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dimension'])) {
            $model->dimension = $map['dimension'];
        }
        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
