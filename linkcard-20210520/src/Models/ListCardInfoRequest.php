<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\Tea\Model;

class ListCardInfoRequest extends Model
{
    /**
     * @example 2022-05-25 23:59:59
     *
     * @var string
     */
    public $activeTimeEnd;

    /**
     * @example 2022-05-25 23:59:59
     *
     * @var string
     */
    public $activeTimeStart;

    /**
     * @example ali_2
     *
     * @var string
     */
    public $aliFee;

    /**
     * @example 211519634******
     *
     * @var string
     */
    public $aliyunOrderId;

    /**
     * @example cmiot
     *
     * @var string
     */
    public $apnName;

    /**
     * @example enterprise
     *
     * @var string
     */
    public $certifyType;

    /**
     * @example CM-***-*-2-**M
     *
     * @var string
     */
    public $credentialNo;

    /**
     * @example 30MB
     *
     * @var string
     */
    public $dataLevel;

    /**
     * @example sameflowcard
     *
     * @var string
     */
    public $dataType;

    /**
     * @example 22
     *
     * @var string
     */
    public $directionalGroupId;

    /**
     * @example 2022-05-25 23:59:59
     *
     * @var string
     */
    public $expireTimeEnd;

    /**
     * @example 2022-05-25 23:59:59
     *
     * @var string
     */
    public $expireTimeStart;

    /**
     * @example 89860321******15668
     *
     * @var string
     */
    public $iccid;

    /**
     * @example 460081937******
     *
     * @var string
     */
    public $imsi;

    /**
     * @example true
     *
     * @var bool
     */
    public $isAutoRecharge;

    /**
     * @example 30
     *
     * @var string
     */
    public $maxFlow;

    /**
     * @example 0.2
     *
     * @var float
     */
    public $maxRestFlowPercentage;

    /**
     * @example 20
     *
     * @var string
     */
    public $minFlow;

    /**
     * @example 1440993******
     *
     * @var string
     */
    public $msisdn;

    /**
     * @example 11111
     *
     * @var string
     */
    public $notifyId;

    /**
     * @example 300
     *
     * @var string
     */
    public $osStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1101
     *
     * @var string
     */
    public $period;

    /**
     * @example test1
     *
     * @var string
     */
    public $poolId;

    /**
     * @example nano
     *
     * @var string
     */
    public $simType;

    /**
     * @example 35
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @example CMCC
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'activeTimeEnd'         => 'ActiveTimeEnd',
        'activeTimeStart'       => 'ActiveTimeStart',
        'aliFee'                => 'AliFee',
        'aliyunOrderId'         => 'AliyunOrderId',
        'apnName'               => 'ApnName',
        'certifyType'           => 'CertifyType',
        'credentialNo'          => 'CredentialNo',
        'dataLevel'             => 'DataLevel',
        'dataType'              => 'DataType',
        'directionalGroupId'    => 'DirectionalGroupId',
        'expireTimeEnd'         => 'ExpireTimeEnd',
        'expireTimeStart'       => 'ExpireTimeStart',
        'iccid'                 => 'Iccid',
        'imsi'                  => 'Imsi',
        'isAutoRecharge'        => 'IsAutoRecharge',
        'maxFlow'               => 'MaxFlow',
        'maxRestFlowPercentage' => 'MaxRestFlowPercentage',
        'minFlow'               => 'MinFlow',
        'msisdn'                => 'Msisdn',
        'notifyId'              => 'NotifyId',
        'osStatus'              => 'OsStatus',
        'pageNo'                => 'PageNo',
        'pageSize'              => 'PageSize',
        'period'                => 'Period',
        'poolId'                => 'PoolId',
        'simType'               => 'SimType',
        'status'                => 'Status',
        'tagName'               => 'TagName',
        'vendor'                => 'Vendor',
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
        if (null !== $this->maxRestFlowPercentage) {
            $res['MaxRestFlowPercentage'] = $this->maxRestFlowPercentage;
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
        if (isset($map['MaxRestFlowPercentage'])) {
            $model->maxRestFlowPercentage = $map['MaxRestFlowPercentage'];
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
