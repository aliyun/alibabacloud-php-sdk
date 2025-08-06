<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetDomainDnsChallengeResponseBody;

use AlibabaCloud\Dara\Model;

class domainDnsChallenge extends Model
{
    /**
     * @var string
     */
    public $dnsChallengeName;

    /**
     * @var string
     */
    public $dnsChallengeValue;

    /**
     * @var string
     */
    public $dnsType;
    protected $_name = [
        'dnsChallengeName' => 'DnsChallengeName',
        'dnsChallengeValue' => 'DnsChallengeValue',
        'dnsType' => 'DnsType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
