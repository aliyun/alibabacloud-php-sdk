<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopAttackListResponseBody;

use AlibabaCloud\Dara\Model;

class attackList extends Model
{
    /**
     * @var int
     */
    public $attack;
    /**
     * @var int
     */
    public $count;
    /**
     * @var string
     */
    public $domain;
    protected $_name = [
        'attack' => 'Attack',
        'count'  => 'Count',
        'domain' => 'Domain',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attack) {
            $res['Attack'] = $this->attack;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
        if (isset($map['Attack'])) {
            $model->attack = $map['Attack'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}
