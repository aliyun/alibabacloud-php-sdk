<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetDomainDnsChallengeResponseBody;

use AlibabaCloud\Tea\Model;

class domainDnsChallenge extends Model
{
    /**
     * @description The name of the DNS challenge record.
     *
     * @example _idaas-challenge.${domain}
     *
     * @var string
     */
    public $dnsChallengeName;

    /**
     * @description The value of the DNS challenge record.
     *
     * @example exmple123xxx
     *
     * @var string
     */
    public $dnsChallengeValue;

    /**
     * @description The type of the DNS challenge record.
     *
     * @example txt
     *
     * @var string
     */
    public $dnsType;
    protected $_name = [
        'dnsChallengeName' => 'DnsChallengeName',
        'dnsChallengeValue' => 'DnsChallengeValue',
        'dnsType' => 'DnsType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnsChallengeName) {
            $res['DnsChallengeName'] = $this->dnsChallengeName;
        }
        if (null !== $this->dnsChallengeValue) {
            $res['DnsChallengeValue'] = $this->dnsChallengeValue;
        }
        if (null !== $this->dnsType) {
            $res['DnsType'] = $this->dnsType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainDnsChallenge
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnsChallengeName'])) {
            $model->dnsChallengeName = $map['DnsChallengeName'];
        }
        if (isset($map['DnsChallengeValue'])) {
            $model->dnsChallengeValue = $map['DnsChallengeValue'];
        }
        if (isset($map['DnsType'])) {
            $model->dnsType = $map['DnsType'];
        }

        return $model;
    }
}
