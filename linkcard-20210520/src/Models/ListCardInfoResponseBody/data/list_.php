<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models\ListCardInfoResponseBody\data;

use AlibabaCloud\SDK\Linkcard\V20210520\Models\ListCardInfoResponseBody\data\list_\tagList;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $activeTime;

    /**
     * @var string
     */
    public $activeType;

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
    public $credentialInstanceId;

    /**
     * @var string
     */
    public $credentialNo;

    /**
     * @var string
     */
    public $credentialType;

    /**
     * @var string
     */
    public $dataLevel;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var int
     */
    public $directionalGroupId;

    /**
     * @var string
     */
    public $directionalGroupName;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $iccid;

    /**
     * @var string[]
     */
    public $imsi;

    /**
     * @var bool
     */
    public $isAutoRecharge;

    /**
     * @var string[]
     */
    public $msisdn;

    /**
     * @var string
     */
    public $notifyId;

    /**
     * @var string
     */
    public $openAccountTime;

    /**
     * @var string
     */
    public $osStatus;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $periodAddFlow;

    /**
     * @var string
     */
    public $periodRestFlow;

    /**
     * @var string
     */
    public $periodSmsUse;

    /**
     * @var string
     */
    public $privateNetworkSegment;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $simType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tagList[]
     */
    public $tagList;

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var int
     */
    public $vsimInstanceId;
    protected $_name = [
        'activeTime'            => 'ActiveTime',
        'activeType'            => 'ActiveType',
        'aliFee'                => 'AliFee',
        'aliyunOrderId'         => 'AliyunOrderId',
        'apnName'               => 'ApnName',
        'certifyType'           => 'CertifyType',
        'credentialInstanceId'  => 'CredentialInstanceId',
        'credentialNo'          => 'CredentialNo',
        'credentialType'        => 'CredentialType',
        'dataLevel'             => 'DataLevel',
        'dataType'              => 'DataType',
        'directionalGroupId'    => 'DirectionalGroupId',
        'directionalGroupName'  => 'DirectionalGroupName',
        'expireTime'            => 'ExpireTime',
        'iccid'                 => 'Iccid',
        'imsi'                  => 'Imsi',
        'isAutoRecharge'        => 'IsAutoRecharge',
        'msisdn'                => 'Msisdn',
        'notifyId'              => 'NotifyId',
        'openAccountTime'       => 'OpenAccountTime',
        'osStatus'              => 'OsStatus',
        'period'                => 'Period',
        'periodAddFlow'         => 'PeriodAddFlow',
        'periodRestFlow'        => 'PeriodRestFlow',
        'periodSmsUse'          => 'PeriodSmsUse',
        'privateNetworkSegment' => 'PrivateNetworkSegment',
        'remark'                => 'Remark',
        'simType'               => 'SimType',
        'status'                => 'Status',
        'tagList'               => 'TagList',
        'vendor'                => 'Vendor',
        'vsimInstanceId'        => 'VsimInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeTime) {
            $res['ActiveTime'] = $this->activeTime;
        }
        if (null !== $this->activeType) {
            $res['ActiveType'] = $this->activeType;
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
        if (null !== $this->credentialInstanceId) {
            $res['CredentialInstanceId'] = $this->credentialInstanceId;
        }
        if (null !== $this->credentialNo) {
            $res['CredentialNo'] = $this->credentialNo;
        }
        if (null !== $this->credentialType) {
            $res['CredentialType'] = $this->credentialType;
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
        if (null !== $this->directionalGroupName) {
            $res['DirectionalGroupName'] = $this->directionalGroupName;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
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
        if (null !== $this->msisdn) {
            $res['Msisdn'] = $this->msisdn;
        }
        if (null !== $this->notifyId) {
            $res['NotifyId'] = $this->notifyId;
        }
        if (null !== $this->openAccountTime) {
            $res['OpenAccountTime'] = $this->openAccountTime;
        }
        if (null !== $this->osStatus) {
            $res['OsStatus'] = $this->osStatus;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodAddFlow) {
            $res['PeriodAddFlow'] = $this->periodAddFlow;
        }
        if (null !== $this->periodRestFlow) {
            $res['PeriodRestFlow'] = $this->periodRestFlow;
        }
        if (null !== $this->periodSmsUse) {
            $res['PeriodSmsUse'] = $this->periodSmsUse;
        }
        if (null !== $this->privateNetworkSegment) {
            $res['PrivateNetworkSegment'] = $this->privateNetworkSegment;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->simType) {
            $res['SimType'] = $this->simType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = [];
            if (null !== $this->tagList && \is_array($this->tagList)) {
                $n = 0;
                foreach ($this->tagList as $item) {
                    $res['TagList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->vsimInstanceId) {
            $res['VsimInstanceId'] = $this->vsimInstanceId;
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
        if (isset($map['ActiveTime'])) {
            $model->activeTime = $map['ActiveTime'];
        }
        if (isset($map['ActiveType'])) {
            $model->activeType = $map['ActiveType'];
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
        if (isset($map['CredentialInstanceId'])) {
            $model->credentialInstanceId = $map['CredentialInstanceId'];
        }
        if (isset($map['CredentialNo'])) {
            $model->credentialNo = $map['CredentialNo'];
        }
        if (isset($map['CredentialType'])) {
            $model->credentialType = $map['CredentialType'];
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
        if (isset($map['DirectionalGroupName'])) {
            $model->directionalGroupName = $map['DirectionalGroupName'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['Imsi'])) {
            if (!empty($map['Imsi'])) {
                $model->imsi = $map['Imsi'];
            }
        }
        if (isset($map['IsAutoRecharge'])) {
            $model->isAutoRecharge = $map['IsAutoRecharge'];
        }
        if (isset($map['Msisdn'])) {
            if (!empty($map['Msisdn'])) {
                $model->msisdn = $map['Msisdn'];
            }
        }
        if (isset($map['NotifyId'])) {
            $model->notifyId = $map['NotifyId'];
        }
        if (isset($map['OpenAccountTime'])) {
            $model->openAccountTime = $map['OpenAccountTime'];
        }
        if (isset($map['OsStatus'])) {
            $model->osStatus = $map['OsStatus'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodAddFlow'])) {
            $model->periodAddFlow = $map['PeriodAddFlow'];
        }
        if (isset($map['PeriodRestFlow'])) {
            $model->periodRestFlow = $map['PeriodRestFlow'];
        }
        if (isset($map['PeriodSmsUse'])) {
            $model->periodSmsUse = $map['PeriodSmsUse'];
        }
        if (isset($map['PrivateNetworkSegment'])) {
            $model->privateNetworkSegment = $map['PrivateNetworkSegment'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SimType'])) {
            $model->simType = $map['SimType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = [];
                $n              = 0;
                foreach ($map['TagList'] as $item) {
                    $model->tagList[$n++] = null !== $item ? tagList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['VsimInstanceId'])) {
            $model->vsimInstanceId = $map['VsimInstanceId'];
        }

        return $model;
    }
}
