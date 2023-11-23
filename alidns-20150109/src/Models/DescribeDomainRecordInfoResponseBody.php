<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainRecordInfoResponseBody extends Model
{
    /**
     * @description The ID of the domain name.
     *
     * @example 00efd71a-770e-4255-b54e-6fe5659baffe
     *
     * @var string
     */
    public $domainId;

    /**
     * @description The domain name.
     *
     * @example dns-example.top
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ID of the domain name group.
     *
     * @example 2223
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the domain name group.
     *
     * @example MyGroup
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The resolution line.
     *
     * @example default
     *
     * @var string
     */
    public $line;

    /**
     * @description The lock status of the DNS record. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $locked;

    /**
     * @description The priority of the MX-type DNS record.
     *
     * @example 5
     *
     * @var int
     */
    public $priority;

    /**
     * @description The punycode is only returned for Chinese domain names.
     *
     * @example xn--fsq270a.com
     *
     * @var string
     */
    public $punyCode;

    /**
     * @description The host record.
     *
     * @example @
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
     * @description The remark of the DNS record.
     *
     * @example test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the request.
     *
     * @example 536E9CAD-DB30-4647-AC87-AA5CC38C5382
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the DNS record. Valid values: Enable and Disable.
     *
     * @example Enable
     *
     * @var string
     */
    public $status;

    /**
     * @description The TTL of the resolution.
     *
     * @example 600
     *
     * @var int
     */
    public $TTL;

    /**
     * @description The type of the DNS record.
     *
     * @example MX
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of the DNS record.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'domainId'   => 'DomainId',
        'domainName' => 'DomainName',
        'groupId'    => 'GroupId',
        'groupName'  => 'GroupName',
        'line'       => 'Line',
        'locked'     => 'Locked',
        'priority'   => 'Priority',
        'punyCode'   => 'PunyCode',
        'RR'         => 'RR',
        'recordId'   => 'RecordId',
        'remark'     => 'Remark',
        'requestId'  => 'RequestId',
        'status'     => 'Status',
        'TTL'        => 'TTL',
        'type'       => 'Type',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->locked) {
            $res['Locked'] = $this->locked;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->punyCode) {
            $res['PunyCode'] = $this->punyCode;
        }
        if (null !== $this->RR) {
            $res['RR'] = $this->RR;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->TTL) {
            $res['TTL'] = $this->TTL;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainRecordInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['Locked'])) {
            $model->locked = $map['Locked'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['PunyCode'])) {
            $model->punyCode = $map['PunyCode'];
        }
        if (isset($map['RR'])) {
            $model->RR = $map['RR'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TTL'])) {
            $model->TTL = $map['TTL'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
