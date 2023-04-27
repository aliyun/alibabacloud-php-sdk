<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ModifyDomainResponseBody;

use AlibabaCloud\Tea\Model;

class domainInfo extends Model
{
    /**
     * @description The CNAME that is assigned by WAF to the domain name.
     *
     * @example xxxxxcvdaf.****.com
     *
     * @var string
     */
    public $cname;

    /**
     * @description The domain name whose access configurations you modified.
     *
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the domain name.
     *
     * @example www.aliyundoc.com-waf
     *
     * @var string
     */
    public $domainId;
    protected $_name = [
        'cname'    => 'Cname',
        'domain'   => 'Domain',
        'domainId' => 'DomainId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
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
     * @return domainInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }

        return $model;
    }
}
