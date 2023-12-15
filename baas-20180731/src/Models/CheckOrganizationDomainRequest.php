<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class CheckOrganizationDomainRequest extends Model
{
    /**
     * @example bank
     *
     * @var string
     */
    public $domain;

    /**
     * @example bank
     *
     * @var string
     */
    public $domainCode;
    protected $_name = [
        'domain'     => 'Domain',
        'domainCode' => 'DomainCode',
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
        if (null !== $this->domainCode) {
            $res['DomainCode'] = $this->domainCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckOrganizationDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['DomainCode'])) {
            $model->domainCode = $map['DomainCode'];
        }

        return $model;
    }
}
