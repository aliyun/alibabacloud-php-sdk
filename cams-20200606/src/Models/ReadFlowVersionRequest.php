<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class ReadFlowVersionRequest extends Model
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
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Flow version status.
     *
     * @example DRAFT
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'bizCode' => 'BizCode',
        'bizExtend' => 'BizExtend',
        'flowCode' => 'FlowCode',
        'flowVersion' => 'FlowVersion',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'status' => 'Status',
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
        if (null !== $this->flowVersion) {
            $res['FlowVersion'] = $this->flowVersion;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReadFlowVersionRequest
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
        if (isset($map['FlowVersion'])) {
            $model->flowVersion = $map['FlowVersion'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
