<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneRecordsResponseBody\records;

use AlibabaCloud\Tea\Model;

class record extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $line;

    /**
     * @example 60
     *
     * @var int
     */
    public $priority;

    /**
     * @example 5809
     *
     * @var int
     */
    public $recordId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $remark;

    /**
     * @example www
     *
     * @var string
     */
    public $rr;

    /**
     * @example ENABLE
     *
     * @var string
     */
    public $status;

    /**
     * @example 60
     *
     * @var int
     */
    public $ttl;

    /**
     * @example A
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $updateTimestamp;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $value;

    /**
     * @var int
     */
    public $weight;

    /**
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
