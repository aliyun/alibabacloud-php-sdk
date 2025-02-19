<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;

class productInfo extends Model
{
    /**
     * @var bool
     */
    public $autoScaling;
    /**
     * @var int
     */
    public $messageRetentionTime;
    /**
     * @var string
     */
    public $msgProcessSpec;
    /**
     * @var float
     */
    public $sendReceiveRatio;
    /**
     * @var bool
     */
    public $storageEncryption;
    /**
     * @var string
     */
    public $storageSecretKey;
    /**
     * @var bool
     */
    public $supportAutoScaling;
    /**
     * @var bool
     */
    public $traceOn;
    protected $_name = [
        'autoScaling'          => 'autoScaling',
        'messageRetentionTime' => 'messageRetentionTime',
        'msgProcessSpec'       => 'msgProcessSpec',
        'sendReceiveRatio'     => 'sendReceiveRatio',
        'storageEncryption'    => 'storageEncryption',
        'storageSecretKey'     => 'storageSecretKey',
        'supportAutoScaling'   => 'supportAutoScaling',
        'traceOn'              => 'traceOn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoScaling) {
            $res['autoScaling'] = $this->autoScaling;
        }

        if (null !== $this->messageRetentionTime) {
            $res['messageRetentionTime'] = $this->messageRetentionTime;
        }

        if (null !== $this->msgProcessSpec) {
            $res['msgProcessSpec'] = $this->msgProcessSpec;
        }

        if (null !== $this->sendReceiveRatio) {
            $res['sendReceiveRatio'] = $this->sendReceiveRatio;
        }

        if (null !== $this->storageEncryption) {
            $res['storageEncryption'] = $this->storageEncryption;
        }

        if (null !== $this->storageSecretKey) {
            $res['storageSecretKey'] = $this->storageSecretKey;
        }

        if (null !== $this->supportAutoScaling) {
            $res['supportAutoScaling'] = $this->supportAutoScaling;
        }

        if (null !== $this->traceOn) {
            $res['traceOn'] = $this->traceOn;
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
        if (isset($map['autoScaling'])) {
            $model->autoScaling = $map['autoScaling'];
        }

        if (isset($map['messageRetentionTime'])) {
            $model->messageRetentionTime = $map['messageRetentionTime'];
        }

        if (isset($map['msgProcessSpec'])) {
            $model->msgProcessSpec = $map['msgProcessSpec'];
        }

        if (isset($map['sendReceiveRatio'])) {
            $model->sendReceiveRatio = $map['sendReceiveRatio'];
        }

        if (isset($map['storageEncryption'])) {
            $model->storageEncryption = $map['storageEncryption'];
        }

        if (isset($map['storageSecretKey'])) {
            $model->storageSecretKey = $map['storageSecretKey'];
        }

        if (isset($map['supportAutoScaling'])) {
            $model->supportAutoScaling = $map['supportAutoScaling'];
        }

        if (isset($map['traceOn'])) {
            $model->traceOn = $map['traceOn'];
        }

        return $model;
    }
}
