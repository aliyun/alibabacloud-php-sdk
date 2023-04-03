<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainRecordsResponseBody\domainRecords;

use AlibabaCloud\Tea\Model;

class record extends Model
{
    /**
     * @description The domain name to which the DNS record belongs.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The line that is used by the DNS record.
     *
     * @example default
     *
     * @var string
     */
    public $line;

    /**
     * @description Indicates whether the DNS record is locked.
     *
     * @example false
     *
     * @var bool
     */
    public $locked;

    /**
     * @description The priority of the MX record.
     *
     * @example 5
     *
     * @var int
     */
    public $priority;

    /**
     * @description The RR value.
     *
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
     * @description The description of the DNS record.
     *
     * @var string
     */
    public $remark;

    /**
     * @description The status of the DNS record.
     *
     * @example Enable
     *
     * @var string
     */
    public $status;

    /**
     * @description The time-to-live (TTL) of the DNS record.
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
     * @description The record value.
     *
     * @example mail1.hichina.com
     *
     * @var string
     */
    public $value;

    /**
     * @description The weight of the DNS record.
     *
     * @example 2
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'domainName' => 'DomainName',
        'line'       => 'Line',
        'locked'     => 'Locked',
        'priority'   => 'Priority',
        'RR'         => 'RR',
        'recordId'   => 'RecordId',
        'remark'     => 'Remark',
        'status'     => 'Status',
        'TTL'        => 'TTL',
        'type'       => 'Type',
        'value'      => 'Value',
        'weight'     => 'Weight',
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
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->locked) {
            $res['Locked'] = $this->locked;
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
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return record
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
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
        if (isset($map['RR'])) {
            $model->RR = $map['RR'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
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
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
