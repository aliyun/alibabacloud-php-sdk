<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class UpdateFlowVersionShrinkRequest extends Model
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
     * @description Flow code.
     *
     * @example f4912c16943b4dfba44bd6fedacf****
     *
     * @var string
     */
    public $flowCode;

    /**
     * @description Flow version
     *
     * @example 1
     *
     * @var string
     */
    public $flowVersion;

    /**
     * @description DSL data of the flow version
     *
     * @example {}
     *
     * @var string
     */
    public $flowViewModel;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Version remarks
     *
     * @example Fix Send WhatsApp Message Error
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
    protected $_name = [
        'bizCode' => 'BizCode',
        'bizExtendShrink' => 'BizExtend',
        'flowCode' => 'FlowCode',
        'flowVersion' => 'FlowVersion',
        'flowViewModel' => 'FlowViewModel',
        'ownerId' => 'OwnerId',
        'remark' => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
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
        if (null !== $this->flowCode) {
            $res['FlowCode'] = $this->flowCode;
        }
        if (null !== $this->flowVersion) {
            $res['FlowVersion'] = $this->flowVersion;
        }
        if (null !== $this->flowViewModel) {
            $res['FlowViewModel'] = $this->flowViewModel;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFlowVersionShrinkRequest
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
        if (isset($map['FlowCode'])) {
            $model->flowCode = $map['FlowCode'];
        }
        if (isset($map['FlowVersion'])) {
            $model->flowVersion = $map['FlowVersion'];
        }
        if (isset($map['FlowViewModel'])) {
            $model->flowViewModel = $map['FlowViewModel'];
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

        return $model;
    }
}
