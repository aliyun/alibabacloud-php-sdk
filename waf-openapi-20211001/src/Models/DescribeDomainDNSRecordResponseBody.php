<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainDNSRecordResponseBody extends Model
{
    /**
     * @description The status of the DNS settings. Valid values:
     *
     *   **cnameMatched**: The DNS settings are properly configured.
     *   **vipMatched**: An A record maps the domain name to the WAF virtual IP address (VIP).
     *   **wafVip**: An A record maps the domain name to another WAF VIP.
     *   **unRecord**: The domain name does not have a DNS record.
     *   **unUsed**: The domain name is not pointed to WAF.
     *   **checkTimeout**: The check times out.
     *
     * @example cnameMatched
     *
     * @var string
     */
    public $DNSStatus;

    /**
     * @description The request ID.
     *
     * @example D827FCFE-90A7-4330-9326-D33C8B4C****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DNSStatus' => 'DNSStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DNSStatus) {
            $res['DNSStatus'] = $this->DNSStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainDNSRecordResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DNSStatus'])) {
            $model->DNSStatus = $map['DNSStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
