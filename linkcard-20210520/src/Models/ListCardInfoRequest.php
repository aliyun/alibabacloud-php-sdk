<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class ListCardInfoRequest extends Model
{
    /**
     * @var string
     */
    public $activeTimeEnd;

    /**
     * @var string
     */
    public $activeTimeStart;

    /**
     * @var string
     */
    public $aliFee;

    /**
     * @var string
     */
    public $aliyunOrderId;

    /**
     * @var string
     */
    public $apnName;

    /**
     * @var string
     */
    public $certifyType;

    /**
     * @var string
     */
    public $credentialNo;

    /**
     * @var string
     */
    public $dataLevel;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $directionalGroupId;

    /**
     * @var string
     */
    public $expireTimeEnd;

    /**
     * @var string
     */
    public $expireTimeStart;

    /**
     * @var string
     */
    public $iccid;

    /**
     * @var string
     */
    public $imsi;

    /**
     * @var bool
     */
    public $isAutoRecharge;

    /**
     * @var string
     */
    public $maxFlow;

    /**
     * @var string
     */
    public $minFlow;

    /**
     * @var string
     */
    public $msisdn;

    /**
     * @var string
     */
    public $notifyId;

    /**
     * @var string
     */
    public $osStatus;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $poolId;

    /**
     * @var string
     */
    public $simType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'activeTimeEnd'      => 'ActiveTimeEnd',
        'activeTimeStart'    => 'ActiveTimeStart',
        'aliFee'             => 'AliFee',
        'aliyunOrderId'      => 'AliyunOrderId',
        'apnName'            => 'ApnName',
        'certifyType'        => 'CertifyType',
        'credentialNo'       => 'CredentialNo',
        'dataLevel'          => 'DataLevel',
        'dataType'           => 'DataType',
        'directionalGroupId' => 'DirectionalGroupId',
        'expireTimeEnd'      => 'ExpireTimeEnd',
        'expireTimeStart'    => 'ExpireTimeStart',
        'iccid'              => 'Iccid',
        'imsi'               => 'Imsi',
        'isAutoRecharge'     => 'IsAutoRecharge',
        'maxFlow'            => 'MaxFlow',
        'minFlow'            => 'MinFlow',
        'msisdn'             => 'Msisdn',
        'notifyId'           => 'NotifyId',
        'osStatus'           => 'OsStatus',
        'pageNo'             => 'PageNo',
        'pageSize'           => 'PageSize',
        'period'             => 'Period',
        'poolId'             => 'PoolId',
        'simType'            => 'SimType',
        'status'             => 'Status',
        'tagName'            => 'TagName',
        'vendor'             => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeTimeEnd) {
            $res['ActiveTimeEnd'] = $this->activeTimeEnd;
        }
        if (null !== $this->activeTimeStart) {
            $res['ActiveTimeStart'] = $this->activeTimeStart;
        }
        if (null !== $this->aliFee) {
            $res['AliFee'] = $this->aliFee;
        }
        if (null !== $this->aliyunOrderId) {
            $res['AliyunOrderId'] = $this->aliyunOrderId;
        }
        if (null !== $this->apnName) {
            $res['ApnName'] = $this->apnName;
        }
        if (null !== $this->certifyType) {
            $res['CertifyType'] = $this->certifyType;
        }
        if (null !== $this->credentialNo) {
            $res['CredentialNo'] = $this->credentialNo;
        }
        if (null !== $this->dataLevel) {
            $res['DataLevel'] = $this->dataLevel;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->directionalGroupId) {
            $res['DirectionalGroupId'] = $this->directionalGroupId;
        }
        if (null !== $this->expireTimeEnd) {
            $res['ExpireTimeEnd'] = $this->expireTimeEnd;
        }
        if (null !== $this->expireTimeStart) {
            $res['ExpireTimeStart'] = $this->expireTimeStart;
        }
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->imsi) {
            $res['Imsi'] = $this->imsi;
        }
        if (null !== $this->isAutoRecharge) {
            $res['IsAutoRecharge'] = $this->isAutoRecharge;
        }
        if (null !== $this->maxFlow) {
            $res['MaxFlow'] = $this->maxFlow;
        }
        if (null !== $this->minFlow) {
            $res['MinFlow'] = $this->minFlow;
        }
        if (null !== $this->msisdn) {
            $res['Msisdn'] = $this->msisdn;
        }
        if (null !== $this->notifyId) {
            $res['NotifyId'] = $this->notifyId;
        }
        if (null !== $this->osStatus) {
            $res['OsStatus'] = $this->osStatus;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->poolId) {
            $res['PoolId'] = $this->poolId;
        }
        if (null !== $this->simType) {
            $res['SimType'] = $this->simType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCardInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveTimeEnd'])) {
            $model->activeTimeEnd = $map['ActiveTimeEnd'];
        }
        if (isset($map['ActiveTimeStart'])) {
            $model->activeTimeStart = $map['ActiveTimeStart'];
        }
        if (isset($map['AliFee'])) {
            $model->aliFee = $map['AliFee'];
        }
        if (isset($map['AliyunOrderId'])) {
            $model->aliyunOrderId = $map['AliyunOrderId'];
        }
        if (isset($map['ApnName'])) {
            $model->apnName = $map['ApnName'];
        }
        if (isset($map['CertifyType'])) {
            $model->certifyType = $map['CertifyType'];
        }
        if (isset($map['CredentialNo'])) {
            $model->credentialNo = $map['CredentialNo'];
        }
        if (isset($map['DataLevel'])) {
            $model->dataLevel = $map['DataLevel'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['DirectionalGroupId'])) {
            $model->directionalGroupId = $map['DirectionalGroupId'];
        }
        if (isset($map['ExpireTimeEnd'])) {
            $model->expireTimeEnd = $map['ExpireTimeEnd'];
        }
        if (isset($map['ExpireTimeStart'])) {
            $model->expireTimeStart = $map['ExpireTimeStart'];
        }
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['Imsi'])) {
            $model->imsi = $map['Imsi'];
        }
        if (isset($map['IsAutoRecharge'])) {
            $model->isAutoRecharge = $map['IsAutoRecharge'];
        }
        if (isset($map['MaxFlow'])) {
            $model->maxFlow = $map['MaxFlow'];
        }
        if (isset($map['MinFlow'])) {
            $model->minFlow = $map['MinFlow'];
        }
        if (isset($map['Msisdn'])) {
            $model->msisdn = $map['Msisdn'];
        }
        if (isset($map['NotifyId'])) {
            $model->notifyId = $map['NotifyId'];
        }
        if (isset($map['OsStatus'])) {
            $model->osStatus = $map['OsStatus'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PoolId'])) {
            $model->poolId = $map['PoolId'];
        }
        if (isset($map['SimType'])) {
            $model->simType = $map['SimType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
