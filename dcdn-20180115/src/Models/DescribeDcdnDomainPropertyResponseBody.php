<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainPropertyResponseBody extends Model
{
    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The protocol. Valid values:
     *
     *   **udp**
     *   **tcp**
     *
     * @example udp
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The request ID.
     *
     * @example 34AB41F1-04A5-496F-8C8D-634BDBE6A9FB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainName' => 'DomainName',
        'protocol'   => 'Protocol',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainPropertyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
