<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class SignRequest extends Model
{
    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @var string
     */
    public $customIdentifier;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $messageType;

    /**
     * @var string
     */
    public $signingAlgorithm;

    /**
     * @var int
     */
    public $warehouseId;
    protected $_name = [
        'certIdentifier' => 'CertIdentifier',
        'customIdentifier' => 'CustomIdentifier',
        'message' => 'Message',
        'messageType' => 'MessageType',
        'signingAlgorithm' => 'SigningAlgorithm',
        'warehouseId' => 'WarehouseId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }

        if (null !== $this->customIdentifier) {
            $res['CustomIdentifier'] = $this->customIdentifier;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }

        if (null !== $this->signingAlgorithm) {
            $res['SigningAlgorithm'] = $this->signingAlgorithm;
        }

        if (null !== $this->warehouseId) {
            $res['WarehouseId'] = $this->warehouseId;
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
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }

        if (isset($map['CustomIdentifier'])) {
            $model->customIdentifier = $map['CustomIdentifier'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }

        if (isset($map['SigningAlgorithm'])) {
            $model->signingAlgorithm = $map['SigningAlgorithm'];
        }

        if (isset($map['WarehouseId'])) {
            $model->warehouseId = $map['WarehouseId'];
        }

        return $model;
    }
}
