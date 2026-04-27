<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudPreviewoutcallRequest extends Model
{
    /**
     * @var string
     */
    public $backupTels;

    /**
     * @var string
     */
    public $callVariables;

    /**
     * @var int
     */
    public $cdrIsAsr;

    /**
     * @var string
     */
    public $clidList;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var string
     */
    public $crnId;

    /**
     * @var int
     */
    public $dialTelTimeout;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var int
     */
    public $isInvestigation;

    /**
     * @var string
     */
    public $obClid;

    /**
     * @var string
     */
    public $obClidAreaCode;

    /**
     * @var string
     */
    public $obClidGroup;

    /**
     * @var string
     */
    public $requestUniqueId;

    /**
     * @var string
     */
    public $tel;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'backupTels' => 'BackupTels',
        'callVariables' => 'CallVariables',
        'cdrIsAsr' => 'CdrIsAsr',
        'clidList' => 'ClidList',
        'cno' => 'Cno',
        'crnId' => 'CrnId',
        'dialTelTimeout' => 'DialTelTimeout',
        'enterpriseId' => 'EnterpriseId',
        'isInvestigation' => 'IsInvestigation',
        'obClid' => 'ObClid',
        'obClidAreaCode' => 'ObClidAreaCode',
        'obClidGroup' => 'ObClidGroup',
        'requestUniqueId' => 'RequestUniqueId',
        'tel' => 'Tel',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupTels) {
            $res['BackupTels'] = $this->backupTels;
        }

        if (null !== $this->callVariables) {
            $res['CallVariables'] = $this->callVariables;
        }

        if (null !== $this->cdrIsAsr) {
            $res['CdrIsAsr'] = $this->cdrIsAsr;
        }

        if (null !== $this->clidList) {
            $res['ClidList'] = $this->clidList;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->crnId) {
            $res['CrnId'] = $this->crnId;
        }

        if (null !== $this->dialTelTimeout) {
            $res['DialTelTimeout'] = $this->dialTelTimeout;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->isInvestigation) {
            $res['IsInvestigation'] = $this->isInvestigation;
        }

        if (null !== $this->obClid) {
            $res['ObClid'] = $this->obClid;
        }

        if (null !== $this->obClidAreaCode) {
            $res['ObClidAreaCode'] = $this->obClidAreaCode;
        }

        if (null !== $this->obClidGroup) {
            $res['ObClidGroup'] = $this->obClidGroup;
        }

        if (null !== $this->requestUniqueId) {
            $res['RequestUniqueId'] = $this->requestUniqueId;
        }

        if (null !== $this->tel) {
            $res['Tel'] = $this->tel;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['BackupTels'])) {
            $model->backupTels = $map['BackupTels'];
        }

        if (isset($map['CallVariables'])) {
            $model->callVariables = $map['CallVariables'];
        }

        if (isset($map['CdrIsAsr'])) {
            $model->cdrIsAsr = $map['CdrIsAsr'];
        }

        if (isset($map['ClidList'])) {
            $model->clidList = $map['ClidList'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['CrnId'])) {
            $model->crnId = $map['CrnId'];
        }

        if (isset($map['DialTelTimeout'])) {
            $model->dialTelTimeout = $map['DialTelTimeout'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['IsInvestigation'])) {
            $model->isInvestigation = $map['IsInvestigation'];
        }

        if (isset($map['ObClid'])) {
            $model->obClid = $map['ObClid'];
        }

        if (isset($map['ObClidAreaCode'])) {
            $model->obClidAreaCode = $map['ObClidAreaCode'];
        }

        if (isset($map['ObClidGroup'])) {
            $model->obClidGroup = $map['ObClidGroup'];
        }

        if (isset($map['RequestUniqueId'])) {
            $model->requestUniqueId = $map['RequestUniqueId'];
        }

        if (isset($map['Tel'])) {
            $model->tel = $map['Tel'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
