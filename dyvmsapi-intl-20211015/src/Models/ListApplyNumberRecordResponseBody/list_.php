<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models\ListApplyNumberRecordResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $applyId;

    /**
     * @var string
     */
    public $applyNote;

    /**
     * @var string
     */
    public $auditNote;

    /**
     * @var string
     */
    public $auditTs;

    /**
     * @var int
     */
    public $batchIndex;

    /**
     * @var string
     */
    public $commitTs;

    /**
     * @var string
     */
    public $countryId;

    /**
     * @var int
     */
    public $inboundConcurrency;

    /**
     * @var int
     */
    public $outboundConcurrency;

    /**
     * @var int
     */
    public $phoneType;

    /**
     * @var string
     */
    public $qualificationId;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $support;

    /**
     * @var string
     */
    public $updateTs;
    protected $_name = [
        'amount'              => 'Amount',
        'applyId'             => 'ApplyId',
        'applyNote'           => 'ApplyNote',
        'auditNote'           => 'AuditNote',
        'auditTs'             => 'AuditTs',
        'batchIndex'          => 'BatchIndex',
        'commitTs'            => 'CommitTs',
        'countryId'           => 'CountryId',
        'inboundConcurrency'  => 'InboundConcurrency',
        'outboundConcurrency' => 'OutboundConcurrency',
        'phoneType'           => 'PhoneType',
        'qualificationId'     => 'QualificationId',
        'scene'               => 'Scene',
        'status'              => 'Status',
        'support'             => 'Support',
        'updateTs'            => 'UpdateTs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->applyId) {
            $res['ApplyId'] = $this->applyId;
        }
        if (null !== $this->applyNote) {
            $res['ApplyNote'] = $this->applyNote;
        }
        if (null !== $this->auditNote) {
            $res['AuditNote'] = $this->auditNote;
        }
        if (null !== $this->auditTs) {
            $res['AuditTs'] = $this->auditTs;
        }
        if (null !== $this->batchIndex) {
            $res['BatchIndex'] = $this->batchIndex;
        }
        if (null !== $this->commitTs) {
            $res['CommitTs'] = $this->commitTs;
        }
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }
        if (null !== $this->inboundConcurrency) {
            $res['InboundConcurrency'] = $this->inboundConcurrency;
        }
        if (null !== $this->outboundConcurrency) {
            $res['OutboundConcurrency'] = $this->outboundConcurrency;
        }
        if (null !== $this->phoneType) {
            $res['PhoneType'] = $this->phoneType;
        }
        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->support) {
            $res['Support'] = $this->support;
        }
        if (null !== $this->updateTs) {
            $res['UpdateTs'] = $this->updateTs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['ApplyId'])) {
            $model->applyId = $map['ApplyId'];
        }
        if (isset($map['ApplyNote'])) {
            $model->applyNote = $map['ApplyNote'];
        }
        if (isset($map['AuditNote'])) {
            $model->auditNote = $map['AuditNote'];
        }
        if (isset($map['AuditTs'])) {
            $model->auditTs = $map['AuditTs'];
        }
        if (isset($map['BatchIndex'])) {
            $model->batchIndex = $map['BatchIndex'];
        }
        if (isset($map['CommitTs'])) {
            $model->commitTs = $map['CommitTs'];
        }
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }
        if (isset($map['InboundConcurrency'])) {
            $model->inboundConcurrency = $map['InboundConcurrency'];
        }
        if (isset($map['OutboundConcurrency'])) {
            $model->outboundConcurrency = $map['OutboundConcurrency'];
        }
        if (isset($map['PhoneType'])) {
            $model->phoneType = $map['PhoneType'];
        }
        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Support'])) {
            $model->support = $map['Support'];
        }
        if (isset($map['UpdateTs'])) {
            $model->updateTs = $map['UpdateTs'];
        }

        return $model;
    }
}
