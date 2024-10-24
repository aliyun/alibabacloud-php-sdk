<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopUserAgentResponseBody;

use AlibabaCloud\Tea\Model;

class domainTopUa extends Model
{
    /**
     * @example www.example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 22121
     *
     * @var int
     */
    public $pv;

    /**
     * @example TW96aWxsYS81LjAgKFgxMTsgTGludXggeDg2XzY0KSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvOTYuMC40NjY0LjExMCACYWZhcmkvNTM3LjM2
     *
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
        if (null !== $this->userAgent) {
            $res['UserAgent'] = $this->userAgent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainTopUa
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
        if (isset($map['UserAgent'])) {
            $model->userAgent = $map['UserAgent'];
        }

        return $model;
    }
}
