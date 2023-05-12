<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneRecordsResponseBody\records;

use AlibabaCloud\Tea\Model;

class record extends Model
{
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
     * @example 1.1.1.1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'priority' => 'Priority',
        'recordId' => 'RecordId',
        'remark'   => 'Remark',
        'rr'       => 'Rr',
        'status'   => 'Status',
        'ttl'      => 'Ttl',
        'type'     => 'Type',
        'value'    => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
