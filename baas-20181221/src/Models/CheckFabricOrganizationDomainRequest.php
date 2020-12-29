<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class CheckFabricOrganizationDomainRequest extends Model
{
    /**
     * @var string
     */
    public $domainCode;

    /**
     * @var string
     */
    public $domain;
    protected $_name = [
        'domainCode' => 'DomainCode',
        'domain'     => 'Domain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainCode) {
            $res['DomainCode'] = $this->domainCode;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckFabricOrganizationDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainCode'])) {
            $model->domainCode = $map['DomainCode'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}
