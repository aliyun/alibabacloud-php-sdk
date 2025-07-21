<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class ListChatFlowShrinkRequest extends Model
{
    /**
     * @description Business tenant code, default is “ALICOM_OPAAS”.
     *
     * @example ALICOM_OPAAS
     *
     * @var string
     */
    public $bizCode;

    /**
     * @description Business extension information, default is “{}”.
     *
     * @example {}
     *
     * @var string
     */
    public $bizExtendShrink;

    /**
     * @description Flow trigger type, enum values:
     * - TriggeredManually
     * - TriggeredByWhatsApp
     * - TriggeredByInstagram
     * - TriggeredByViber
     * - TriggeredByMessenger
     *
     * @example 示例值
     *
     * @var string
     */
    public $flowTriggerType;

    /**
     * @description Search keyword.
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Page number
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description Page size.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Whether to return the online status
     *
     * @example true
     *
     * @var bool
     */
    public $returnWithOnlineVersion;

    /**
     * @description Flow status
     *
     * @example NORMAL
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'bizCode' => 'BizCode',
        'bizExtendShrink' => 'BizExtend',
        'flowTriggerType' => 'FlowTriggerType',
        'keyword' => 'Keyword',
        'ownerId' => 'OwnerId',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'returnWithOnlineVersion' => 'ReturnWithOnlineVersion',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->bizExtendShrink) {
            $res['BizExtend'] = $this->bizExtendShrink;
        }
        if (null !== $this->flowTriggerType) {
            $res['FlowTriggerType'] = $this->flowTriggerType;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->returnWithOnlineVersion) {
            $res['ReturnWithOnlineVersion'] = $this->returnWithOnlineVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChatFlowShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['BizExtend'])) {
            $model->bizExtendShrink = $map['BizExtend'];
        }
        if (isset($map['FlowTriggerType'])) {
            $model->flowTriggerType = $map['FlowTriggerType'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ReturnWithOnlineVersion'])) {
            $model->returnWithOnlineVersion = $map['ReturnWithOnlineVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
