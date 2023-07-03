<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceRequest;

use AlibabaCloud\Tea\Model;

class serverlessConfig extends Model
{
    /**
     * @var float
     */
    public $maxCapacity;

    /**
     * @var float
     */
    public $minCapacity;
    protected $_name = [
        'maxCapacity' => 'MaxCapacity',
        'minCapacity' => 'MinCapacity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxCapacity) {
            $res['MaxCapacity'] = $this->maxCapacity;
        }
        if (null !== $this->minCapacity) {
            $res['MinCapacity'] = $this->minCapacity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverlessConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxCapacity'])) {
            $model->maxCapacity = $map['MaxCapacity'];
        }
        if (isset($map['MinCapacity'])) {
            $model->minCapacity = $map['MinCapacity'];
        }

        return $model;
    }
}
