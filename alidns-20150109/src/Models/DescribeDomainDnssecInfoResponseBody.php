<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainDnssecInfoResponseBody extends Model
{
    /**
     * @description The algorithm type. This parameter is returned if DNSSEC is enabled.
     *
     * @example 13
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The digest. This parameter is returned if DNSSEC is enabled.
     *
     * @example C1A0424B97A049F1F9B2EA139CC298533219668164E343BD21203ABC4608C02A
     *
     * @var string
     */
    public $digest;

    /**
     * @description The digest type. This parameter is returned if DNSSEC is enabled.
     *
     * @example SHA256
     *
     * @var string
     */
    public $digestType;

    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The delegation signer (DS) record. This parameter is returned if DNSSEC is enabled.
     *
     * @example example.com. 3600 IN DS 2371 13 2 C1A0424B97A049F1F9B2EA139CC298533219668164E343BD21203ABC4608C02A
     *
     * @var string
     */
    public $dsRecord;

    /**
     * @description The flag. This parameter is returned if DNSSEC is enabled.
     *
     * @example 257 (KSK)
     *
     * @var string
     */
    public $flags;

    /**
     * @description The key tag. This parameter is returned if DNSSEC is enabled.
     *
     * @example 54931
     *
     * @var string
     */
    public $keyTag;

    /**
     * @description The public key. This parameter is returned if DNSSEC is enabled.
     *
     * @example mdsswUyr3DPW132mOi8V9xESWE8jTo0dxCjjnopKl+GqJxpVXckHAeF+KkxLbxILfDLUT0rAK9iUzy1L53eKGQ==
     *
     * @var string
     */
    public $publicKey;

    /**
     * @description The request ID.
     *
     * @example 536E9CAD-DB30-4647-AC87-AA5CC38C5382
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The state of the DNSSEC. Valid values:
     *
     *   ON
     *   OFF
     *
     * @example ON
     *
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
