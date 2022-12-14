<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureResponseBody\data;

use AlibabaCloud\SDK\Facebody\V20191230\Models\BodyPostureResponseBody\data\outputs\results;
use AlibabaCloud\Tea\Model;

class outputs extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $humanCount;

    /**
     * @var results[]
     */
    public $results;
    protected $_name = [
        'humanCount' => 'HumanCount',
        'results'    => 'Results',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->humanCount) {
            $res['HumanCount'] = $this->humanCount;
        }
        if (null !== $this->results) {
            $res['Results'] = [];
            if (null !== $this->results && \is_array($this->results)) {
                $n = 0;
                foreach ($this->results as $item) {
                    $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HumanCount'])) {
            $model->humanCount = $map['HumanCount'];
        }
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n              = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
