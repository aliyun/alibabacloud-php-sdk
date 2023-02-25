<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainsResponseBody;

use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @description The header of IP address of the client that is connected to the point of presence (POP).
     *
     * @example X-Forwarded-For
     *
     * @var string
     */
    public $clientIpTag;

    /**
     * @description The protected domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The number of protection policies that were configured for the protected domain name.
     *
     * @example 3
     *
     * @var int
     */
    public $policyCount;
    protected $_name = [
        'clientIpTag' => 'ClientIpTag',
        'domainName'  => 'DomainName',
        'policyCount' => 'PolicyCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIpTag) {
            $res['ClientIpTag'] = $this->clientIpTag;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->policyCount) {
            $res['PolicyCount'] = $this->policyCount;
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
        if (isset($map['ClientIpTag'])) {
            $model->clientIpTag = $map['ClientIpTag'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['PolicyCount'])) {
            $model->policyCount = $map['PolicyCount'];
        }

        return $model;
    }
}
