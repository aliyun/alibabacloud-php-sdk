<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListCorsDomainsResponseBody;

use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example 97e3ff58-01e4-****-b975-1805fec34d77
     *
     * @var string
     */
    public $domainId;
    protected $_name = [
        'domain'   => 'Domain',
        'domainId' => 'DomainId',
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
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domains
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }

        return $model;
    }
}
