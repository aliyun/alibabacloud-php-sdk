<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsResponseBody\recordResultList\success;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The encryption algorithm used for the record. Valid values: 0 to 255. Applicable to CERT and SSHFP records.
     *
     * @example 0
     *
     * @var int
     */
    public $algorithm;

    /**
     * @description The public key of the certificate. Applicable to CERT, SMIMEA, and TLSA records.
     *
     * @example dGVzdGFkYWxrcw==
     *
     * @var string
     */
    public $certificate;

    /**
     * @description The public key fingerprint of the record. Applicable to SSHFP records.
     *
     * @example abcdef1234567890
     *
     * @var string
     */
    public $fingerprint;

    /**
     * @description The flag bit of the record. Indicates its priority and handling method, used in CAA records.
     *
     * @example 128
     *
     * @var int
     */
    public $flag;

    /**
     * @description The public key identification for the record. Valid values: 0 to 65535. Applicable to CERT records.
     *
     * @example 0
     *
     * @var int
     */
    public $keyTag;

    /**
     * @description The algorithm policy used to match or validate the certificate. Valid values: 0 to 255. Applicable to SMIMEA and TLSA records.
     *
     * @example 0
     *
     * @var int
     */
    public $matchingType;

    /**
     * @description The port of the record. Valid values: 0 to 65535. Exclusive to SRV records.
     *
     * @example 0
     *
     * @var int
     */
    public $port;

    /**
     * @description The priority of the record. Valid values: 0 to 65535. A smaller value indicates a higher priority. Applicable to MX, SRV, and URI records.
     *
     * @example 10
     *
     * @var int
     */
    public $priority;

    /**
     * @description The type of certificate or public key. Valid values: 0 to 255. Applicable to SMIMEA and TLSA records.
     *
     * @example 0
     *
     * @var int
     */
    public $selector;

    /**
     * @description The label of a CAA record, which indicates its specific type and purpose, such as issue, issuewild, and iodef.
     *
     * @example issue
     *
     * @var string
     */
    public $tag;

    /**
     * @description The certificate type of the record (in CERT records), or the public key type (in SSHFP records).
     *
     * @example 0
     *
     * @var int
     */
    public $type;

    /**
     * @description The usage identifier of the record. Valid values: 0 to 255. Applicable to SMIMEA and TLSA records.
     *
     * @example 0
     *
     * @var int
     */
    public $usage;

    /**
     * @description The record value or part of the record content. This value is returned when the record is A/AAAA, CNAME, NS, MX, TXT, CAA, SRV, or URI. It has different meanings based on types of records:
     *
     *   **A/AAAA**: the IP addresses. Multiple IPs are separated by commas (,). There is at least one IPv4 address.
     *   **CNAME**: the mapped domain name.
     *   **NS**: the nameservers for the domain name.
     *   **MX**: a valid domain name of the target mail server.
     *   **TXT**: a valid text string.
     *   **CAA**: a valid domain name of the certificate authority.
     *   **SRV**: a valid domain name of the target host.
     *   **URI**: a valid URI string.
     *
     * @example example.com
     *
     * @var string
     */
    public $value;

    /**
     * @description The weight of the record. Valid values: 0 to 65535. Applicable to SRV and URI records.
     *
     * @example 0
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'algorithm'    => 'Algorithm',
        'certificate'  => 'Certificate',
        'fingerprint'  => 'Fingerprint',
        'flag'         => 'Flag',
        'keyTag'       => 'KeyTag',
        'matchingType' => 'MatchingType',
        'port'         => 'Port',
        'priority'     => 'Priority',
        'selector'     => 'Selector',
        'tag'          => 'Tag',
        'type'         => 'Type',
        'usage'        => 'Usage',
        'value'        => 'Value',
        'weight'       => 'Weight',
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
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->keyTag) {
            $res['KeyTag'] = $this->keyTag;
        }
        if (null !== $this->matchingType) {
            $res['MatchingType'] = $this->matchingType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->selector) {
            $res['Selector'] = $this->selector;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['KeyTag'])) {
            $model->keyTag = $map['KeyTag'];
        }
        if (isset($map['MatchingType'])) {
            $model->matchingType = $map['MatchingType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Selector'])) {
            $model->selector = $map['Selector'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
