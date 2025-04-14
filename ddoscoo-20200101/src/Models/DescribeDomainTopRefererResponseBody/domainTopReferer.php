<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopRefererResponseBody;

use AlibabaCloud\Dara\Model;

class domainTopReferer extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $pv;

    /**
     * @var string
     */
    public $referer;
    protected $_name = [
        'domain' => 'Domain',
        'pv' => 'Pv',
        'referer' => 'Referer',
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

        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
        }

        if (null !== $this->referer) {
            $res['Referer'] = $this->referer;
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

        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }

        if (isset($map['Referer'])) {
            $model->referer = $map['Referer'];
        }

        return $model;
    }
}
