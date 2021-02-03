<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainDnssecInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $digest;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $publicKey;

    /**
     * @var string
     */
    public $digestType;

    /**
     * @var string
     */
    public $dsRecord;

    /**
     * @var string
     */
    public $keyTag;

    /**
     * @var string
     */
    public $flags;

    /**
     * @var string
     */
    public $algorithm;
    protected $_name = [
        'status'     => 'Status',
        'requestId'  => 'RequestId',
        'digest'     => 'Digest',
        'domainName' => 'DomainName',
        'publicKey'  => 'PublicKey',
        'digestType' => 'DigestType',
        'dsRecord'   => 'DsRecord',
        'keyTag'     => 'KeyTag',
        'flags'      => 'Flags',
        'algorithm'  => 'Algorithm',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }
        if (null !== $this->digestType) {
            $res['DigestType'] = $this->digestType;
        }
        if (null !== $this->dsRecord) {
            $res['DsRecord'] = $this->dsRecord;
        }
        if (null !== $this->keyTag) {
            $res['KeyTag'] = $this->keyTag;
        }
        if (null !== $this->flags) {
            $res['Flags'] = $this->flags;
        }
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainDnssecInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }
        if (isset($map['DigestType'])) {
            $model->digestType = $map['DigestType'];
        }
        if (isset($map['DsRecord'])) {
            $model->dsRecord = $map['DsRecord'];
        }
        if (isset($map['KeyTag'])) {
            $model->keyTag = $map['KeyTag'];
        }
        if (isset($map['Flags'])) {
            $model->flags = $map['Flags'];
        }
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }

        return $model;
    }
}
