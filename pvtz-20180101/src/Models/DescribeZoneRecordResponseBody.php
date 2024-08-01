<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DescribeZoneRecordResponseBody extends Model
{
    /**
     * @example 2018-01-23T03:15Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1516775741000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example default
     *
     * @var string
     */
    public $line;

    /**
     * @example 5
     *
     * @var int
     */
    public $priority;

    /**
     * @example 5808
     *
     * @var int
     */
    public $recordId;

    /**
     * @example test record
     *
     * @var string
     */
    public $remark;

    /**
     * @example 0B7AD377-7E86-44A8-B9A8-53E8666E72FE
     *
     * @var string
     */
    public $requestId;

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
     * @example 2018-01-24T06:35Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1516775741000
     *
     * @var int
     */
    public $updateTimestamp;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $value;

    /**
     * @example 1
     *
     * @var int
     */
    public $weight;

    /**
     * @description Zone ID。
     *
     * @example CAgICA1OA_58
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
        'requestId'       => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeZoneRecordResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
