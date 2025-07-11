<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class ListChatFlowRequest extends Model
{
    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var mixed[]
     */
    public $bizExtend;

    /**
     * @var string
     */
    public $flowTriggerType;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $ownerId;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var bool
     */
    public $returnWithOnlineVersion;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'bizCode' => 'BizCode',
        'bizExtend' => 'BizExtend',
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

    public function validate()
    {
        if (\is_array($this->bizExtend)) {
            Model::validateArray($this->bizExtend);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->bizExtend) {
            if (\is_array($this->bizExtend)) {
                $res['BizExtend'] = [];
                foreach ($this->bizExtend as $key1 => $value1) {
                    $res['BizExtend'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['BizExtend'])) {
            if (!empty($map['BizExtend'])) {
                $model->bizExtend = [];
                foreach ($map['BizExtend'] as $key1 => $value1) {
                    $model->bizExtend[$key1] = $value1;
                }
            }
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
