<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultDetailResponseBody\batchResultDetails;

use AlibabaCloud\Tea\Model;

class batchResultDetail extends Model
{
    /**
     * @var string
     */
    public $batchType;

    /**
     * @var string
     */
    public $domain;

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
    public $newValue;

    /**
     * @var string
     */
    public $operateDateStr;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $rr;

    /**
     * @var string
     */
    public $rrStatus;

    /**
     * @var bool
     */
    public $status;

    /**
     * @var string
     */
    public $ttl;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'batchType'      => 'BatchType',
        'domain'         => 'Domain',
        'line'           => 'Line',
        'newRr'          => 'NewRr',
        'newValue'       => 'NewValue',
        'operateDateStr' => 'OperateDateStr',
        'priority'       => 'Priority',
        'reason'         => 'Reason',
        'recordId'       => 'RecordId',
        'remark'         => 'Remark',
        'rr'             => 'Rr',
        'rrStatus'       => 'RrStatus',
        'status'         => 'Status',
        'ttl'            => 'Ttl',
        'type'           => 'Type',
        'value'          => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchType) {
            $res['BatchType'] = $this->batchType;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->newRr) {
            $res['NewRr'] = $this->newRr;
        }
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }
        if (null !== $this->operateDateStr) {
            $res['OperateDateStr'] = $this->operateDateStr;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (null !== $this->rrStatus) {
            $res['RrStatus'] = $this->rrStatus;
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
     * @return batchResultDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchType'])) {
            $model->batchType = $map['BatchType'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['NewRr'])) {
            $model->newRr = $map['NewRr'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }
        if (isset($map['OperateDateStr'])) {
            $model->operateDateStr = $map['OperateDateStr'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
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
        if (isset($map['RrStatus'])) {
            $model->rrStatus = $map['RrStatus'];
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
