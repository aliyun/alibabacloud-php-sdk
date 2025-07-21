<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class ListFlowVersionRequest extends Model
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
     * @var int
     */
    public $ownerId;

    /**
     * @description Current page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description Page size.
     *
     * @example 5
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
        'ownerId' => 'OwnerId',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowVersionRequest
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
