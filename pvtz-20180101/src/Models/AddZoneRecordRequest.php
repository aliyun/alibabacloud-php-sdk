<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class AddZoneRecordRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
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
     * @description The DNS request source. Valid values:
     *
     *   default: the default resolution line. The default line is equivalent to a global line. We recommend that you configure a default line to ensure that a DNS record can be returned if no intelligent line is matched.
     *   Alibaba Cloud lines: indicate that DNS requests are originated from Alibaba Cloud, including Alibaba Cloud public cloud, Alibaba Finance Cloud, and Alibaba Gov Cloud.
     *   Custom lines: You can configure custom lines so that Private DNS can return specific IP addresses for DNS requests that are originated from a specific CIDR block.
     *
     * >
     *
     *   Only built-in authoritative acceleration zones support custom lines.
     *
     *   Set Line to default if you want to choose the default line. Set Line to a specific line code if you want to choose an Alibaba Cloud line or a custom line. Example: aliyun_r_cn-beijing-a.
     *
     * @example default
     *
     * @var string
     */
    public $line;

    /**
     * @description The priority of the mail exchanger (MX) record. Valid values: **1 to 99**. A smaller value indicates a higher priority.
     *
     * @example 5
     *
     * @var int
     */
    public $priority;

    /**
     * @description The description of the DNS record.
     *
     * @example en
     *
     * @var string
     */
    public $remark;

    /**
     * @description The hostname. The hostname is the prefix of the subdomain name for the zone. Example: www, @, \\* (used for wildcard DNS resolution), and mail (used for specifying the mail server that receives emails).
     *
     * This parameter is required.
     * @example www
     *
     * @var string
     */
    public $rr;

    /**
     * @description The time to live (TTL) period. Valid values: 5, 30, 60, 3600, 43200, and 86400. Unit: seconds. Default value: 60.
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
     * @example 114.55.XX.XX
     *
     * @var string
     */
    public $value;

    /**
     * @description The weight value of the address. You can set a different weight value for each address. This way, addresses are returned based on the weight values for DNS requests. A weight value must be an integer that ranges from 1 to 100. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $weight;

    /**
     * @description The zone ID. This ID uniquely identifies the zone.
     *
     * This parameter is required.
     * @example df2d03865266bd9842306db586d3****
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'lang'         => 'Lang',
        'line'         => 'Line',
        'priority'     => 'Priority',
        'remark'       => 'Remark',
        'rr'           => 'Rr',
        'ttl'          => 'Ttl',
        'type'         => 'Type',
        'userClientIp' => 'UserClientIp',
        'value'        => 'Value',
        'weight'       => 'Weight',
        'zoneId'       => 'ZoneId',
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
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddZoneRecordRequest
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
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
