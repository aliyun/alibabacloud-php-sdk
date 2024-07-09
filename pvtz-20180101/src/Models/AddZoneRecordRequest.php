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
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The resolution line. Default value: **default**.
     *
     * @example default
     *
     * @var string
     */
    public $line;

    /**
     * @description The priority of the mail exchanger (MX) record. Valid values: **1 to 99**.
     *
     * @example 5
     *
     * @var int
     */
    public $priority;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $remark;

    /**
     * @description The hostname.
     *
     * This parameter is required.
     * @example www
     *
     * @var string
     */
    public $rr;

    /**
     * @description The time to live (TTL) of the DNS record. Default value: **60**.
     *
     * @example 60
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The type of the DNS record. Valid values: **A**, **AAAA**, **CNAME**, **TXT**, **MX**, **PTR**, and **SRV**.
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
     * @example 2.2.XX.XX
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description The record value.
     *
     * This parameter is required.
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $value;

    /**
     * @description The weight of the address. Valid values: **0 to 100**. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $weight;

    /**
     * @description The global ID of the zone.
     *
     * This parameter is required.
     * @example CAgICA1OA_58
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
