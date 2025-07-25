<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainRecordsResponseBody\domainRecords;

use AlibabaCloud\Tea\Model;

class record extends Model
{
    /**
     * @description The time when the DNS record was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since 00:00:00 UTC on January 1, 1970.
     *
     * @example 1666501957000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var bool
     */
    public $lbaStatus;

    /**
     * @description The resolution line.
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
     * @description The priority of the mail exchanger (MX) record.
     *
     * @example 5
     *
     * @var int
     */
    public $priority;

    /**
     * @description The hostname.
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
     * @example test
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
     * @description The time-to-live (TTL) of the cached DNS record. Unit: seconds.
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
     * @description The time when the DNS record was updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since 00:00:00 UTC on January 1, 1970.
     *
     * @example 1676872961000
     *
     * @var int
     */
    public $updateTimestamp;

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
        'createTimestamp' => 'CreateTimestamp',
        'domainName' => 'DomainName',
        'lbaStatus' => 'LbaStatus',
        'line' => 'Line',
        'locked' => 'Locked',
        'priority' => 'Priority',
        'RR' => 'RR',
        'recordId' => 'RecordId',
        'remark' => 'Remark',
        'status' => 'Status',
        'TTL' => 'TTL',
        'type' => 'Type',
        'updateTimestamp' => 'UpdateTimestamp',
        'value' => 'Value',
        'weight' => 'Weight',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->lbaStatus) {
            $res['LbaStatus'] = $this->lbaStatus;
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
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['LbaStatus'])) {
            $model->lbaStatus = $map['LbaStatus'];
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
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
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
