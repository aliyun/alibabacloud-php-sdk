<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultDetailResponse\batchResultDetails;

use AlibabaCloud\Tea\Model;

class batchResultDetail extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $rr;

    /**
     * @var string
     */
    public $value;

    /**
     * @var bool
     */
    public $status;

    /**
     * @var string
     */
    public $reason;

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
    public $batchType;

    /**
     * @var string
     */
    public $operateDateStr;

    /**
     * @var string
     */
    public $line;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $ttl;

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
    public $rrStatus;
    protected $_name = [
        'domain'         => 'Domain',
        'type'           => 'Type',
        'rr'             => 'Rr',
        'value'          => 'Value',
        'status'         => 'Status',
        'reason'         => 'Reason',
        'newRr'          => 'NewRr',
        'newValue'       => 'NewValue',
        'batchType'      => 'BatchType',
        'operateDateStr' => 'OperateDateStr',
        'line'           => 'Line',
        'priority'       => 'Priority',
        'ttl'            => 'Ttl',
        'recordId'       => 'RecordId',
        'remark'         => 'Remark',
        'rrStatus'       => 'RrStatus',
    ];

    public function validate()
    {
        Model::validateRequired('domain', $this->domain, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('rr', $this->rr, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('reason', $this->reason, true);
        Model::validateRequired('newRr', $this->newRr, true);
        Model::validateRequired('newValue', $this->newValue, true);
        Model::validateRequired('batchType', $this->batchType, true);
        Model::validateRequired('operateDateStr', $this->operateDateStr, true);
        Model::validateRequired('line', $this->line, true);
        Model::validateRequired('priority', $this->priority, true);
        Model::validateRequired('ttl', $this->ttl, true);
        Model::validateRequired('recordId', $this->recordId, true);
        Model::validateRequired('remark', $this->remark, true);
        Model::validateRequired('rrStatus', $this->rrStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->rr) {
            $res['Rr'] = $this->rr;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->newRr) {
            $res['NewRr'] = $this->newRr;
        }
        if (null !== $this->newValue) {
            $res['NewValue'] = $this->newValue;
        }
        if (null !== $this->batchType) {
            $res['BatchType'] = $this->batchType;
        }
        if (null !== $this->operateDateStr) {
            $res['OperateDateStr'] = $this->operateDateStr;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->rrStatus) {
            $res['RrStatus'] = $this->rrStatus;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Rr'])) {
            $model->rr = $map['Rr'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['NewRr'])) {
            $model->newRr = $map['NewRr'];
        }
        if (isset($map['NewValue'])) {
            $model->newValue = $map['NewValue'];
        }
        if (isset($map['BatchType'])) {
            $model->batchType = $map['BatchType'];
        }
        if (isset($map['OperateDateStr'])) {
            $model->operateDateStr = $map['OperateDateStr'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RrStatus'])) {
            $model->rrStatus = $map['RrStatus'];
        }

        return $model;
    }
}
