<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainDnssecInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $digest;

    /**
     * @var string
     */
    public $digestType;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $dsRecord;

    /**
     * @var string
     */
    public $flags;

    /**
     * @var string
     */
    public $keyTag;

    /**
     * @var string
     */
    public $publicKey;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'algorithm'  => 'Algorithm',
        'digest'     => 'Digest',
        'digestType' => 'DigestType',
        'domainName' => 'DomainName',
        'dsRecord'   => 'DsRecord',
        'flags'      => 'Flags',
        'keyTag'     => 'KeyTag',
        'publicKey'  => 'PublicKey',
        'requestId'  => 'RequestId',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->digest) {
            $res['Digest'] = $this->digest;
        }
        if (null !== $this->digestType) {
            $res['DigestType'] = $this->digestType;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->dsRecord) {
            $res['DsRecord'] = $this->dsRecord;
        }
        if (null !== $this->flags) {
            $res['Flags'] = $this->flags;
        }
        if (null !== $this->keyTag) {
            $res['KeyTag'] = $this->keyTag;
        }
        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['Digest'])) {
            $model->digest = $map['Digest'];
        }
        if (isset($map['DigestType'])) {
            $model->digestType = $map['DigestType'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DsRecord'])) {
            $model->dsRecord = $map['DsRecord'];
        }
        if (isset($map['Flags'])) {
            $model->flags = $map['Flags'];
        }
        if (isset($map['KeyTag'])) {
            $model->keyTag = $map['KeyTag'];
        }
        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
