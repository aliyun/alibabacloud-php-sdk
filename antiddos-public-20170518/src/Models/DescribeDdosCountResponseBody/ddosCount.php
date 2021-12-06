<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeDdosCountResponseBody;

use AlibabaCloud\Tea\Model;

class ddosCount extends Model
{
    /**
     * @var int
     */
    public $blackholeCount;

    /**
     * @var int
     */
    public $defenseCount;

    /**
     * @var int
     */
    public $instacenCount;
    protected $_name = [
        'blackholeCount' => 'BlackholeCount',
        'defenseCount'   => 'DefenseCount',
        'instacenCount'  => 'InstacenCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackholeCount) {
            $res['BlackholeCount'] = $this->blackholeCount;
        }
        if (null !== $this->defenseCount) {
            $res['DefenseCount'] = $this->defenseCount;
        }
        if (null !== $this->instacenCount) {
            $res['InstacenCount'] = $this->instacenCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ddosCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackholeCount'])) {
            $model->blackholeCount = $map['BlackholeCount'];
        }
        if (isset($map['DefenseCount'])) {
            $model->defenseCount = $map['DefenseCount'];
        }
        if (isset($map['InstacenCount'])) {
            $model->instacenCount = $map['InstacenCount'];
        }

        return $model;
    }
}
