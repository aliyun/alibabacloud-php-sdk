<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainsResponseBody;

use AlibabaCloud\Tea\Model;

class domains extends Model
{
    /**
     * @var string
     */
    public $clientIpTag;

    /**
     * @var string
     */
    public $domainName;

    /**
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
