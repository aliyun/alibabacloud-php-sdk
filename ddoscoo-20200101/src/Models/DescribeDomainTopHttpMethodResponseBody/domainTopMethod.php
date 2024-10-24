<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopHttpMethodResponseBody;

use AlibabaCloud\Tea\Model;

class domainTopMethod extends Model
{
    /**
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example GET
     *
     * @var string
     */
    public $httpMethod;

    /**
     * @example 22121
     *
     * @var int
     */
    public $pv;
    protected $_name = [
        'domain'     => 'Domain',
        'httpMethod' => 'HttpMethod',
        'pv'         => 'Pv',
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
        if (null !== $this->httpMethod) {
            $res['HttpMethod'] = $this->httpMethod;
        }
        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainTopMethod
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['HttpMethod'])) {
            $model->httpMethod = $map['HttpMethod'];
        }
        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }

        return $model;
    }
}
