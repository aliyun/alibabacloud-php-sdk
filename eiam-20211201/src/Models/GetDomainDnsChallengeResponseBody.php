<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetDomainDnsChallengeResponseBody\domainDnsChallenge;

class GetDomainDnsChallengeResponseBody extends Model
{
    /**
     * @var domainDnsChallenge
     */
    public $domainDnsChallenge;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainDnsChallenge' => 'DomainDnsChallenge',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->domainDnsChallenge) {
            $this->domainDnsChallenge->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainDnsChallenge) {
            $res['DomainDnsChallenge'] = null !== $this->domainDnsChallenge ? $this->domainDnsChallenge->toArray($noStream) : $this->domainDnsChallenge;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DomainDnsChallenge'])) {
            $model->domainDnsChallenge = domainDnsChallenge::fromMap($map['DomainDnsChallenge']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
