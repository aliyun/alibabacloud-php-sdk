<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcQpsInfoResponseBody;

use AlibabaCloud\Tea\Model;

class attacks extends Model
{
    /**
     * @var string[]
     */
    public $attack;
    protected $_name = [
        'attack' => 'Attack',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attack) {
            $res['Attack'] = $this->attack;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attacks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attack'])) {
            if (!empty($map['Attack'])) {
                $model->attack = $map['Attack'];
            }
        }

        return $model;
    }
}
