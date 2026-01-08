<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetViberByRequestNoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetViberByRequestNoResponseBody\data\auditRecord;

class data extends Model
{
    /**
     * @var auditRecord
     */
    public $auditRecord;

    /**
     * @var string
     */
    public $auditResult;

    /**
     * @var string
     */
    public $auditTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModifier;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $maapServiceNo;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $requestNo;

    /**
     * @var string
     */
    public $requestType;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $subscriberCode;
    protected $_name = [
        'auditRecord' => 'AuditRecord',
        'auditResult' => 'AuditResult',
        'auditTime' => 'AuditTime',
        'creator' => 'Creator',
        'gmtCreate' => 'GmtCreate',
        'gmtModifier' => 'GmtModifier',
        'id' => 'Id',
        'maapServiceNo' => 'MaapServiceNo',
        'modifier' => 'Modifier',
        'reason' => 'Reason',
        'requestNo' => 'RequestNo',
        'requestType' => 'RequestType',
        'state' => 'State',
        'subscriberCode' => 'SubscriberCode',
    ];

    public function validate()
    {
        if (null !== $this->auditRecord) {
            $this->auditRecord->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditRecord) {
            $res['AuditRecord'] = null !== $this->auditRecord ? $this->auditRecord->toArray($noStream) : $this->auditRecord;
        }

        if (null !== $this->auditResult) {
            $res['AuditResult'] = $this->auditResult;
        }

        if (null !== $this->auditTime) {
            $res['AuditTime'] = $this->auditTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModifier) {
            $res['GmtModifier'] = $this->gmtModifier;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->maapServiceNo) {
            $res['MaapServiceNo'] = $this->maapServiceNo;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->requestNo) {
            $res['RequestNo'] = $this->requestNo;
        }

        if (null !== $this->requestType) {
            $res['RequestType'] = $this->requestType;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->subscriberCode) {
            $res['SubscriberCode'] = $this->subscriberCode;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditRecord'])) {
            $model->auditRecord = auditRecord::fromMap($map['AuditRecord']);
        }

        if (isset($map['AuditResult'])) {
            $model->auditResult = $map['AuditResult'];
        }

        if (isset($map['AuditTime'])) {
            $model->auditTime = $map['AuditTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModifier'])) {
            $model->gmtModifier = $map['GmtModifier'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MaapServiceNo'])) {
            $model->maapServiceNo = $map['MaapServiceNo'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['RequestNo'])) {
            $model->requestNo = $map['RequestNo'];
        }

        if (isset($map['RequestType'])) {
            $model->requestType = $map['RequestType'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['SubscriberCode'])) {
            $model->subscriberCode = $map['SubscriberCode'];
        }

        return $model;
    }
}
