<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models\EnterpriseUninvitedAdminInviteJoinEnterpriseResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $applicantAliyunId;

    /**
     * @var string
     */
    public $applicantPk;

    /**
     * @var string
     */
    public $applyRemark;

    /**
     * @var int
     */
    public $applyTime;

    /**
     * @var string
     */
    public $auditorAliyunId;

    /**
     * @var string
     */
    public $auditorPk;

    /**
     * @var string
     */
    public $ecId;

    /**
     * @var string
     */
    public $leId;

    /**
     * @var string
     */
    public $leLicenseNo;

    /**
     * @var string
     */
    public $leName;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $nbId;

    /**
     * @var string
     */
    public $operatedAliyunId;

    /**
     * @var string
     */
    public $operatedPk;

    /**
     * @var string
     */
    public $success;

    /**
     * @var int
     */
    public $timeoutTime;

    /**
     * @var string
     */
    public $todoId;

    /**
     * @var string
     */
    public $todoType;
    protected $_name = [
        'applicantAliyunId' => 'ApplicantAliyunId',
        'applicantPk' => 'ApplicantPk',
        'applyRemark' => 'ApplyRemark',
        'applyTime' => 'ApplyTime',
        'auditorAliyunId' => 'AuditorAliyunId',
        'auditorPk' => 'AuditorPk',
        'ecId' => 'EcId',
        'leId' => 'LeId',
        'leLicenseNo' => 'LeLicenseNo',
        'leName' => 'LeName',
        'message' => 'Message',
        'nbId' => 'NbId',
        'operatedAliyunId' => 'OperatedAliyunId',
        'operatedPk' => 'OperatedPk',
        'success' => 'Success',
        'timeoutTime' => 'TimeoutTime',
        'todoId' => 'TodoId',
        'todoType' => 'TodoType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicantAliyunId) {
            $res['ApplicantAliyunId'] = $this->applicantAliyunId;
        }

        if (null !== $this->applicantPk) {
            $res['ApplicantPk'] = $this->applicantPk;
        }

        if (null !== $this->applyRemark) {
            $res['ApplyRemark'] = $this->applyRemark;
        }

        if (null !== $this->applyTime) {
            $res['ApplyTime'] = $this->applyTime;
        }

        if (null !== $this->auditorAliyunId) {
            $res['AuditorAliyunId'] = $this->auditorAliyunId;
        }

        if (null !== $this->auditorPk) {
            $res['AuditorPk'] = $this->auditorPk;
        }

        if (null !== $this->ecId) {
            $res['EcId'] = $this->ecId;
        }

        if (null !== $this->leId) {
            $res['LeId'] = $this->leId;
        }

        if (null !== $this->leLicenseNo) {
            $res['LeLicenseNo'] = $this->leLicenseNo;
        }

        if (null !== $this->leName) {
            $res['LeName'] = $this->leName;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->nbId) {
            $res['NbId'] = $this->nbId;
        }

        if (null !== $this->operatedAliyunId) {
            $res['OperatedAliyunId'] = $this->operatedAliyunId;
        }

        if (null !== $this->operatedPk) {
            $res['OperatedPk'] = $this->operatedPk;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->timeoutTime) {
            $res['TimeoutTime'] = $this->timeoutTime;
        }

        if (null !== $this->todoId) {
            $res['TodoId'] = $this->todoId;
        }

        if (null !== $this->todoType) {
            $res['TodoType'] = $this->todoType;
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
        if (isset($map['ApplicantAliyunId'])) {
            $model->applicantAliyunId = $map['ApplicantAliyunId'];
        }

        if (isset($map['ApplicantPk'])) {
            $model->applicantPk = $map['ApplicantPk'];
        }

        if (isset($map['ApplyRemark'])) {
            $model->applyRemark = $map['ApplyRemark'];
        }

        if (isset($map['ApplyTime'])) {
            $model->applyTime = $map['ApplyTime'];
        }

        if (isset($map['AuditorAliyunId'])) {
            $model->auditorAliyunId = $map['AuditorAliyunId'];
        }

        if (isset($map['AuditorPk'])) {
            $model->auditorPk = $map['AuditorPk'];
        }

        if (isset($map['EcId'])) {
            $model->ecId = $map['EcId'];
        }

        if (isset($map['LeId'])) {
            $model->leId = $map['LeId'];
        }

        if (isset($map['LeLicenseNo'])) {
            $model->leLicenseNo = $map['LeLicenseNo'];
        }

        if (isset($map['LeName'])) {
            $model->leName = $map['LeName'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NbId'])) {
            $model->nbId = $map['NbId'];
        }

        if (isset($map['OperatedAliyunId'])) {
            $model->operatedAliyunId = $map['OperatedAliyunId'];
        }

        if (isset($map['OperatedPk'])) {
            $model->operatedPk = $map['OperatedPk'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TimeoutTime'])) {
            $model->timeoutTime = $map['TimeoutTime'];
        }

        if (isset($map['TodoId'])) {
            $model->todoId = $map['TodoId'];
        }

        if (isset($map['TodoType'])) {
            $model->todoType = $map['TodoType'];
        }

        return $model;
    }
}
