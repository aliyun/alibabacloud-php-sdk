<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class UpdateChatFlowRequest extends Model
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
     * @var mixed[]
     */
    public $bizExtend;

    /**
     * @description Process code.
     *
     * @example f4912c16943b4dfba44bd6fedacf8c70
     *
     * @var string
     */
    public $flowCode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Process remarks
     *
     * @example This is Customer Service WhatsApp Auto-Reply Flow
     *
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Process title
     *
     * @example Customer Service WhatsApp Auto-Reply Flow
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'bizCode' => 'BizCode',
        'bizExtend' => 'BizExtend',
        'flowCode' => 'FlowCode',
        'ownerId' => 'OwnerId',
        'remark' => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'title' => 'Title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }
        if (null !== $this->bizExtend) {
            $res['BizExtend'] = $this->bizExtend;
        }
        if (null !== $this->flowCode) {
            $res['FlowCode'] = $this->flowCode;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateChatFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }
        if (isset($map['BizExtend'])) {
            $model->bizExtend = $map['BizExtend'];
        }
        if (isset($map['FlowCode'])) {
            $model->flowCode = $map['FlowCode'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
