<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultDetailResponseBody;

use AlibabaCloud\Tea\Model;

class batchResultDetails extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $rr;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $rrStatus;

    /**
     * @var string
     */
    public $operateDateStr;

    /**
     * @var string
     */
    public $newValue;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $ttl;

    /**
     * @var string
     */
    public $batchType;

    /**
     * @var string
     */
    public $line;

    /**
     * @var string
     */
    public $newRr;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'status'         => 'Status',
        'type'           => 'Type',
        'domain'         => 'Domain',
        'remark'         => 'Remark',
        'recordId'       => 'RecordId',
        'rr'             => 'Rr',
        'priority'       => 'Priority',
        'rrStatus'       => 'RrStatus',
        'operateDateStr' => 'OperateDateStr',
        'newValue'       => 'NewValue',
        'value'          => 'Value',
        'ttl'            => 'Ttl',
        'batchType'      => 'BatchType',
        'line'           => 'Line',
        'newRr'          => 'NewRr',
        'reason'         => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->rr) {
            $res['Rr'] = $this->rr;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->rrStatus) {
            $res['RrStatus'] = $this->rrStatus;
        }
        if (null !== $this->operateDateStr) {
            $res['OperateDateStr'] = $this->operateDateStr;
        }
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->batchType) {
            $res['BatchType'] = $this->batchType;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->newRr) {
            $res['NewRr'] = $this->newRr;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return batchResultDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['Rr'])) {
            $model->rr = $map['Rr'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RrStatus'])) {
            $model->rrStatus = $map['RrStatus'];
        }
        if (isset($map['OperateDateStr'])) {
            $model->operateDateStr = $map['OperateDateStr'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['BatchType'])) {
            $model->batchType = $map['BatchType'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['NewRr'])) {
            $model->newRr = $map['NewRr'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
