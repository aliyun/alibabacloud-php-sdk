<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopUserAgentResponseBody;

use AlibabaCloud\Dara\Model;

class domainTopUa extends Model
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
    public $userAgent;
    protected $_name = [
        'domain'    => 'Domain',
        'pv'        => 'Pv',
        'userAgent' => 'UserAgent',
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

        if (null !== $this->userAgent) {
            $res['UserAgent'] = $this->userAgent;
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

        if (isset($map['UserAgent'])) {
            $model->userAgent = $map['UserAgent'];
        }

        return $model;
    }
}
