<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class UpdateZoneRecordRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 6447728c8578e66aacf062d2df4446dc
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * Default value: en.
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The resolution line. Default value: default.
     *
     * @example default
     *
     * @var string
     */
    public $line;

    /**
     * @description The priority of the MX record. You can set priorities for different email servers. Valid values: 1 to 99. A smaller value indicates a higher priority.
     *
     * >  This parameter is required if the type of the DNS record is MX.
     * @example 60
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ID of the DNS record. You can call the DescribeZoneRecords operation to query a list of DNS records.
     *
     * This parameter is required.
     * @example 172223****
     *
     * @var int
     */
    public $recordId;

    /**
     * @description The hostname. The hostname is the prefix of the subdomain name for zone. Example: www, @, \\* (used for wildcard DNS resolution), and mail (used for specifying the mail server that receives emails).
     *
     * This parameter is required.
     * @example www
     *
     * @var string
     */
    public $rr;

    /**
     * @description The TTL period. Valid values: 5, 30, 60, 3600, 43200, and 86400. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The type of the DNS record. Valid values:
     *
     *   **A**: An A record maps a domain name to an IPv4 address in the dotted decimal notation format.
     *   **AAAA**: An AAAA record maps a domain name to an IPv6 address.
     *   **CNAME**: A canonical name (CNAME) record maps a domain name to another domain name.
     *   **TXT**: A text (TXT) record usually serves as a Sender Policy Framework (SPF) record to prevent email spam. The record value of the TXT record can be up to 255 characters in length.
     *   **MX**: A mail exchanger (MX) record maps a domain name to the domain name of a mail server.
     *   **PTR**: A pointer (PTR) record maps an IP address to a domain name.
     *   **SRV**: A service (SRV) record specifies a server that hosts a specific service. Enter a record value in the format of Priority Weight Port Destination domain name. Separate these items with spaces.
     *
     * This parameter is required.
     * @example A
     *
     * @var string
     */
    public $type;

    /**
     * @description The IP address of the client.
     *
     * @example 127.0.XX.XX
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description The record value. You need to enter the record value based on the DNS record type.
     *
     * This parameter is required.
     * @example 192.16.XX.XX
     *
     * @var string
     */
    public $value;

    /**
     * @description The weight value of the address. You can set a different weight value for each address. This way, addresses are returned based on the weight values for DNS requests. A weight value must be an integer that ranges from 1 to 100.
     *
     * @example 1
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'lang'         => 'Lang',
        'line'         => 'Line',
        'priority'     => 'Priority',
        'recordId'     => 'RecordId',
        'rr'           => 'Rr',
        'ttl'          => 'Ttl',
        'type'         => 'Type',
        'userClientIp' => 'UserClientIp',
        'value'        => 'Value',
        'weight'       => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->rr) {
            $res['Rr'] = $this->rr;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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
     * @return UpdateZoneRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['Rr'])) {
            $model->rr = $map['Rr'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
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
