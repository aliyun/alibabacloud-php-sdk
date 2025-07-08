<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignLastRangeNewResponseBody\list_;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignLastRangeNewResponseBody\list_\smsSign\fileIds;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignLastRangeNewResponseBody\list_\smsSign\fileUrlList;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSignLastRangeNewResponseBody\list_\smsSign\signSceneDetailList;

class smsSign extends Model
{
    /**
     * @var string
     */
    public $auditInfo;

    /**
     * @var string
     */
    public $auditRemarkInfo;

    /**
     * @var string
     */
    public $auditState;

    /**
     * @var string
     */
    public $extendMessage;

    /**
     * @var fileIds
     */
    public $fileIds;

    /**
     * @var fileUrlList
     */
    public $fileUrlList;

    /**
     * @var string
     */
    public $gmtCreateStr;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $isDefaultSign;

    /**
     * @var string
     */
    public $operateDateStr;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $sceneType;

    /**
     * @var int
     */
    public $serviceType;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var signSceneDetailList
     */
    public $signSceneDetailList;

    /**
     * @var int
     */
    public $signType;

    /**
     * @var string
     */
    public $signUsageName;
    protected $_name = [
        'auditInfo' => 'AuditInfo',
        'auditRemarkInfo' => 'AuditRemarkInfo',
        'auditState' => 'AuditState',
        'extendMessage' => 'ExtendMessage',
        'fileIds' => 'FileIds',
        'fileUrlList' => 'FileUrlList',
        'gmtCreateStr' => 'GmtCreateStr',
        'id' => 'Id',
        'isDefaultSign' => 'IsDefaultSign',
        'operateDateStr' => 'OperateDateStr',
        'orderId' => 'OrderId',
        'remark' => 'Remark',
        'sceneType' => 'SceneType',
        'serviceType' => 'ServiceType',
        'signName' => 'SignName',
        'signSceneDetailList' => 'SignSceneDetailList',
        'signType' => 'SignType',
        'signUsageName' => 'SignUsageName',
    ];

    public function validate()
    {
        if (null !== $this->fileIds) {
            $this->fileIds->validate();
        }
        if (null !== $this->fileUrlList) {
            $this->fileUrlList->validate();
        }
        if (null !== $this->signSceneDetailList) {
            $this->signSceneDetailList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditInfo) {
            $res['AuditInfo'] = $this->auditInfo;
        }

        if (null !== $this->auditRemarkInfo) {
            $res['AuditRemarkInfo'] = $this->auditRemarkInfo;
        }

        if (null !== $this->auditState) {
            $res['AuditState'] = $this->auditState;
        }

        if (null !== $this->extendMessage) {
            $res['ExtendMessage'] = $this->extendMessage;
        }

        if (null !== $this->fileIds) {
            $res['FileIds'] = null !== $this->fileIds ? $this->fileIds->toArray($noStream) : $this->fileIds;
        }

        if (null !== $this->fileUrlList) {
            $res['FileUrlList'] = null !== $this->fileUrlList ? $this->fileUrlList->toArray($noStream) : $this->fileUrlList;
        }

        if (null !== $this->gmtCreateStr) {
            $res['GmtCreateStr'] = $this->gmtCreateStr;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isDefaultSign) {
            $res['IsDefaultSign'] = $this->isDefaultSign;
        }

        if (null !== $this->operateDateStr) {
            $res['OperateDateStr'] = $this->operateDateStr;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->signSceneDetailList) {
            $res['SignSceneDetailList'] = null !== $this->signSceneDetailList ? $this->signSceneDetailList->toArray($noStream) : $this->signSceneDetailList;
        }

        if (null !== $this->signType) {
            $res['SignType'] = $this->signType;
        }

        if (null !== $this->signUsageName) {
            $res['SignUsageName'] = $this->signUsageName;
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
        if (isset($map['AuditInfo'])) {
            $model->auditInfo = $map['AuditInfo'];
        }

        if (isset($map['AuditRemarkInfo'])) {
            $model->auditRemarkInfo = $map['AuditRemarkInfo'];
        }

        if (isset($map['AuditState'])) {
            $model->auditState = $map['AuditState'];
        }

        if (isset($map['ExtendMessage'])) {
            $model->extendMessage = $map['ExtendMessage'];
        }

        if (isset($map['FileIds'])) {
            $model->fileIds = fileIds::fromMap($map['FileIds']);
        }

        if (isset($map['FileUrlList'])) {
            $model->fileUrlList = fileUrlList::fromMap($map['FileUrlList']);
        }

        if (isset($map['GmtCreateStr'])) {
            $model->gmtCreateStr = $map['GmtCreateStr'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsDefaultSign'])) {
            $model->isDefaultSign = $map['IsDefaultSign'];
        }

        if (isset($map['OperateDateStr'])) {
            $model->operateDateStr = $map['OperateDateStr'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['SignSceneDetailList'])) {
            $model->signSceneDetailList = signSceneDetailList::fromMap($map['SignSceneDetailList']);
        }

        if (isset($map['SignType'])) {
            $model->signType = $map['SignType'];
        }

        if (isset($map['SignUsageName'])) {
            $model->signUsageName = $map['SignUsageName'];
        }

        return $model;
    }
}
