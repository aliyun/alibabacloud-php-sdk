<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class Notification extends Model
{
    /**
     * @var string
     */
    public $extendedMessageURI;

    /**
     * @var MNS
     */
    public $MNS;

    /**
     * @var RocketMQ
     */
    public $rocketMQ;
    protected $_name = [
        'extendedMessageURI' => 'ExtendedMessageURI',
        'MNS' => 'MNS',
        'rocketMQ' => 'RocketMQ',
    ];

    public function validate()
    {
        if (null !== $this->MNS) {
            $this->MNS->validate();
        }
        if (null !== $this->rocketMQ) {
            $this->rocketMQ->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extendedMessageURI) {
            $res['ExtendedMessageURI'] = $this->extendedMessageURI;
        }

        if (null !== $this->MNS) {
            $res['MNS'] = null !== $this->MNS ? $this->MNS->toArray($noStream) : $this->MNS;
        }

        if (null !== $this->rocketMQ) {
            $res['RocketMQ'] = null !== $this->rocketMQ ? $this->rocketMQ->toArray($noStream) : $this->rocketMQ;
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
        if (isset($map['ExtendedMessageURI'])) {
            $model->extendedMessageURI = $map['ExtendedMessageURI'];
        }

        if (isset($map['MNS'])) {
            $model->MNS = MNS::fromMap($map['MNS']);
        }

        if (isset($map['RocketMQ'])) {
            $model->rocketMQ = RocketMQ::fromMap($map['RocketMQ']);
        }

        return $model;
    }
}
