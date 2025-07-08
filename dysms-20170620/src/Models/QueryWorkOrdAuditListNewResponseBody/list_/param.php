<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryWorkOrdAuditListNewResponseBody\list_;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryWorkOrdAuditListNewResponseBody\list_\param\auditRemarkInfo;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryWorkOrdAuditListNewResponseBody\list_\param\auditState;

class param extends Model
{
    /**
     * @var string
     */
    public $auditInfo;

    /**
     * @var auditRemarkInfo
     */
    public $auditRemarkInfo;

    /**
     * @var auditState
     */
    public $auditState;

    /**
     * @var int
     */
    public $businessType;

    /**
     * @var string
     */
    public $extendMessage;

    /**
     * @var int[]
     */
    public $fileIds;

    /**
     * @var string[]
     */
    public $fileUrlList;

    /**
     * @var string
     */
    public $gmtCreateStr;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var int
     */
    public $partnerId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $sceneType;

    /**
     * @var string
     */
    public $signName;

    /**
     * @var int
     */
    public $signType;
    protected $_name = [
        'auditInfo' => 'AuditInfo',
        'auditRemarkInfo' => 'AuditRemarkInfo',
        'auditState' => 'AuditState',
        'businessType' => 'BusinessType',
        'extendMessage' => 'ExtendMessage',
        'fileIds' => 'FileIds',
        'fileUrlList' => 'FileUrlList',
        'gmtCreateStr' => 'GmtCreateStr',
        'id' => 'Id',
        'orderId' => 'OrderId',
        'partnerId' => 'PartnerId',
        'remark' => 'Remark',
        'sceneType' => 'SceneType',
        'signName' => 'SignName',
        'signType' => 'SignType',
    ];

    public function validate()
    {
        if (null !== $this->auditRemarkInfo) {
            $this->auditRemarkInfo->validate();
        }
        if (null !== $this->auditState) {
            $this->auditState->validate();
        }
        if (\is_array($this->fileIds)) {
            Model::validateArray($this->fileIds);
        }
        if (\is_array($this->fileUrlList)) {
            Model::validateArray($this->fileUrlList);
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
            $res['AuditRemarkInfo'] = null !== $this->auditRemarkInfo ? $this->auditRemarkInfo->toArray($noStream) : $this->auditRemarkInfo;
        }

        if (null !== $this->auditState) {
            $res['AuditState'] = null !== $this->auditState ? $this->auditState->toArray($noStream) : $this->auditState;
        }

        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->extendMessage) {
            $res['ExtendMessage'] = $this->extendMessage;
        }

        if (null !== $this->fileIds) {
            if (\is_array($this->fileIds)) {
                $res['FileIds'] = [];
                $n1 = 0;
                foreach ($this->fileIds as $item1) {
                    $res['FileIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fileUrlList) {
            if (\is_array($this->fileUrlList)) {
                $res['FileUrlList'] = [];
                $n1 = 0;
                foreach ($this->fileUrlList as $item1) {
                    $res['FileUrlList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gmtCreateStr) {
            $res['GmtCreateStr'] = $this->gmtCreateStr;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->partnerId) {
            $res['PartnerId'] = $this->partnerId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }

        if (null !== $this->signType) {
            $res['SignType'] = $this->signType;
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
            $model->auditRemarkInfo = auditRemarkInfo::fromMap($map['AuditRemarkInfo']);
        }

        if (isset($map['AuditState'])) {
            $model->auditState = auditState::fromMap($map['AuditState']);
        }

        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['ExtendMessage'])) {
            $model->extendMessage = $map['ExtendMessage'];
        }

        if (isset($map['FileIds'])) {
            if (!empty($map['FileIds'])) {
                $model->fileIds = [];
                $n1 = 0;
                foreach ($map['FileIds'] as $item1) {
                    $model->fileIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FileUrlList'])) {
            if (!empty($map['FileUrlList'])) {
                $model->fileUrlList = [];
                $n1 = 0;
                foreach ($map['FileUrlList'] as $item1) {
                    $model->fileUrlList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GmtCreateStr'])) {
            $model->gmtCreateStr = $map['GmtCreateStr'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['PartnerId'])) {
            $model->partnerId = $map['PartnerId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        if (isset($map['SignType'])) {
            $model->signType = $map['SignType'];
        }

        return $model;
    }
}
