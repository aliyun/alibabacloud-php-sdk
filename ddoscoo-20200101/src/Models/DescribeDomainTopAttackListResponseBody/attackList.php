<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopAttackListResponseBody;

use AlibabaCloud\Tea\Model;

class attackList extends Model
{
    /**
     * @var int
     */
    public $attack;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'attack' => 'Attack',
        'domain' => 'Domain',
        'count'  => 'Count',
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
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attackList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attack'])) {
            $model->attack = $map['Attack'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
