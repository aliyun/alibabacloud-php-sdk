<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;

class QueryForOperationRequest extends Model
{
    /**
     * @var int
     */
    public $applyTimeEnd;

    /**
     * @var int
     */
    public $applyTimeStart;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var int
     */
    public $auditTimeEnd;

    /**
     * @var int
     */
    public $auditTimeStart;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $customerUid;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'applyTimeEnd' => 'ApplyTimeEnd',
        'applyTimeStart' => 'ApplyTimeStart',
        'assetType' => 'AssetType',
        'auditTimeEnd' => 'AuditTimeEnd',
        'auditTimeStart' => 'AuditTimeStart',
        'currentPage' => 'CurrentPage',
        'customerUid' => 'CustomerUid',
        'ip' => 'Ip',
        'pageSize' => 'PageSize',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyTimeEnd) {
            $res['ApplyTimeEnd'] = $this->applyTimeEnd;
        }

        if (null !== $this->applyTimeStart) {
            $res['ApplyTimeStart'] = $this->applyTimeStart;
        }

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->auditTimeEnd) {
            $res['AuditTimeEnd'] = $this->auditTimeEnd;
        }

        if (null !== $this->auditTimeStart) {
            $res['AuditTimeStart'] = $this->auditTimeStart;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->customerUid) {
            $res['CustomerUid'] = $this->customerUid;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ApplyTimeEnd'])) {
            $model->applyTimeEnd = $map['ApplyTimeEnd'];
        }

        if (isset($map['ApplyTimeStart'])) {
            $model->applyTimeStart = $map['ApplyTimeStart'];
        }

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['AuditTimeEnd'])) {
            $model->auditTimeEnd = $map['AuditTimeEnd'];
        }

        if (isset($map['AuditTimeStart'])) {
            $model->auditTimeStart = $map['AuditTimeStart'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['CustomerUid'])) {
            $model->customerUid = $map['CustomerUid'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
