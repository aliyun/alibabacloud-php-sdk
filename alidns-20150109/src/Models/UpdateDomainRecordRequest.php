<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateDomainRecordRequest extends Model
{
    /**
     * @description The language type.
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
     * @description The priority of an MX-type DNS record. Valid values: `[1,50]`.
     *
     * This parameter must be specified if the type of the DNS record is MX.
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The host record.
     *
     * For example, to resolve @.example.com, you must set RR to an at sign (@) instead of leaving it blank.
     * @example www
     *
     * @var string
     */
    public $RR;

    /**
     * @description The ID of the DNS record.
     *
     * @example 9999985
     *
     * @var string
     */
    public $recordId;

    /**
     * @description The TTL of the resolution. Default value: 600. Unit: seconds.
     *
     * @example 600
     *
     * @var int
     */
    public $TTL;

    /**
     * @description The type of the DNS record.
     *
     * @example A
     *
     * @var string
     */
    public $type;

    /**
     * @description The IP address of the client.
     *
     * @example 192.0.2.0
     *
     * @var string
     */
    public $userClientIp;

    /**
     * @description The value of the DNS record.
     *
     * @example 192.0.2.254
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'lang'         => 'Lang',
        'line'         => 'Line',
        'priority'     => 'Priority',
        'RR'           => 'RR',
        'recordId'     => 'RecordId',
        'TTL'          => 'TTL',
        'type'         => 'Type',
        'userClientIp' => 'UserClientIp',
        'value'        => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->RR) {
            $res['RR'] = $this->RR;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->TTL) {
            $res['TTL'] = $this->TTL;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDomainRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RR'])) {
            $model->RR = $map['RR'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['TTL'])) {
            $model->TTL = $map['TTL'];
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

        return $model;
    }
}
