<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopAttackListResponseBody;

use AlibabaCloud\Tea\Model;

class attackList extends Model
{
    /**
     * @description The attack QPS. Unit: QPS
     *
     * @example 0
     *
     * @var int
     */
    public $attack;

    /**
     * @description The number of all QPS, which includes normal and attack QPS. Unit: QPS.
     *
     * @example 294
     *
     * @var int
     */
    public $count;

    /**
     * @description The domain name of the website.
     *
     * @example www.aliyun.com
     *
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
    }

    public function toMap()
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}
