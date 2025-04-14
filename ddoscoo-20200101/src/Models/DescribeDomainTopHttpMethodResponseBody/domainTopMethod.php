<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopHttpMethodResponseBody;

use AlibabaCloud\Dara\Model;

class domainTopMethod extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $httpMethod;

    /**
     * @var int
     */
    public $pv;
    protected $_name = [
        'domain' => 'Domain',
        'httpMethod' => 'HttpMethod',
        'pv' => 'Pv',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
