<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class AddInboundNumberRequest extends Model
{
    /**
     * @var string
     */
    public $applicationCode;

    /**
     * @var string[]
     */
    public $inboundNumbers;

    /**
     * @var int
     */
    public $inboundType;

    /**
     * @var string
     */
    public $lineCode;

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
    protected $_name = [
        'applicationCode' => 'ApplicationCode',
        'inboundNumbers' => 'InboundNumbers',
        'inboundType' => 'InboundType',
        'lineCode' => 'LineCode',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->inboundNumbers)) {
            Model::validateArray($this->inboundNumbers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationCode) {
            $res['ApplicationCode'] = $this->applicationCode;
        }

        if (null !== $this->inboundNumbers) {
            if (\is_array($this->inboundNumbers)) {
                $res['InboundNumbers'] = [];
                $n1 = 0;
                foreach ($this->inboundNumbers as $item1) {
                    $res['InboundNumbers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->inboundType) {
            $res['InboundType'] = $this->inboundType;
        }

        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationCode'])) {
            $model->applicationCode = $map['ApplicationCode'];
        }

        if (isset($map['InboundNumbers'])) {
            if (!empty($map['InboundNumbers'])) {
                $model->inboundNumbers = [];
                $n1 = 0;
                foreach ($map['InboundNumbers'] as $item1) {
                    $model->inboundNumbers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InboundType'])) {
            $model->inboundType = $map['InboundType'];
        }

        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
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

        return $model;
    }
}
