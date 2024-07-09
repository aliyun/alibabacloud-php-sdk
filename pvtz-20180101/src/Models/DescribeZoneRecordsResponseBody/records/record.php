<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneRecordsResponseBody\records;

use AlibabaCloud\Tea\Model;

class record extends Model
{
    /**
     * @description The time when the DNS record was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2019-03-14T03:47Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the DNS record was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1672740294000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The resolution line.
     *
     * @example default
     *
     * @var string
     */
    public $line;

    /**
     * @description The priority of the mail exchanger (MX) record.
     *
     * @example 60
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ID of the DNS record.
     *
     * @example 5809
     *
     * @var int
     */
    public $recordId;

    /**
     * @description The description of the DNS record.
     *
     * @example xxx
     *
     * @var string
     */
    public $remark;

    /**
     * @description The hostname.
     *
     * @example www
     *
     * @var string
     */
    public $rr;

    /**
     * @description The state of the DNS record. Valid values:
     *
     *   ENABLE: The DNS record is enabled.
     *   DISABLE: The DNS record is disabled.
     *
     * @example ENABLE
     *
     * @var string
     */
    public $status;

    /**
     * @description The time-to-live (TTL) of the DNS record.
     *
     * @example 60
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The type of the DNS record.
     *
     * @example A
     *
     * @var string
     */
    public $type;

    /**
     * @description The time when the DNS record was updated. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-05-08T02:31Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The time when the DNS record was updated. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1654777678000
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @description The record value.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $value;

    /**
     * @description The weight of the address.
     *
     * @example 1
     *
     * @var int
     */
    public $weight;

    /**
     * @description The zone ID.
     *
     * @example a49f55537f3b0b1e6e43add0bf5f0033
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'line'            => 'Line',
        'priority'        => 'Priority',
        'recordId'        => 'RecordId',
        'remark'          => 'Remark',
        'rr'              => 'Rr',
        'status'          => 'Status',
        'ttl'             => 'Ttl',
        'type'            => 'Type',
        'updateTime'      => 'UpdateTime',
        'updateTimestamp' => 'UpdateTimestamp',
        'value'           => 'Value',
        'weight'          => 'Weight',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
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
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->rr) {
            $res['Rr'] = $this->rr;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
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
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Rr'])) {
            $model->rr = $map['Rr'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
