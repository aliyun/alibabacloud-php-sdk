<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\AirportSearchResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\AirportSearchResponseBody\module\cities;

class module extends Model
{
    /**
     * @var cities[]
     */
    public $cities;

    /**
     * @var bool
     */
    public $nearby;
    protected $_name = [
        'cities' => 'cities',
        'nearby' => 'nearby',
    ];

    public function validate()
    {
        if (\is_array($this->cities)) {
            Model::validateArray($this->cities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cities) {
            if (\is_array($this->cities)) {
                $res['cities'] = [];
                $n1 = 0;
                foreach ($this->cities as $item1) {
                    $res['cities'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nearby) {
            $res['nearby'] = $this->nearby;
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
        if (isset($map['cities'])) {
            if (!empty($map['cities'])) {
                $model->cities = [];
                $n1 = 0;
                foreach ($map['cities'] as $item1) {
                    $model->cities[$n1++] = cities::fromMap($item1);
                }
            }
        }

        if (isset($map['nearby'])) {
            $model->nearby = $map['nearby'];
        }

        return $model;
    }
}
