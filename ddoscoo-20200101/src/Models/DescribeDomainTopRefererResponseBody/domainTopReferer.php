<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopRefererResponseBody;

use AlibabaCloud\Tea\Model;

class domainTopReferer extends Model
{
    /**
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 257031
     *
     * @var int
     */
    public $pv;

    /**
     * @example aHR0cHM6Ly9zZXJ2aWNld2VjaGF0LmNvbS93eGY3ZDc5YWY0YzU4ZDH3NTEvNC9wYWdlLWZyYW1lLmh0bWw=
     *
     * @var string
     */
    public $referer;
    protected $_name = [
        'domain'  => 'Domain',
        'pv'      => 'Pv',
        'referer' => 'Referer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
        }
        if (null !== $this->referer) {
            $res['Referer'] = $this->referer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainTopReferer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }
        if (isset($map['Referer'])) {
            $model->referer = $map['Referer'];
        }

        return $model;
    }
}
