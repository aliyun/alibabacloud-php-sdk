<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Notification extends Model
{
    /**
     * @var MNS
     */
    public $MNS;

    /**
     * @var RocketMQ
     */
    public $rocketMQ;
    protected $_name = [
        'MNS'      => 'MNS',
        'rocketMQ' => 'RocketMQ',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->MNS) {
            $res['MNS'] = null !== $this->MNS ? $this->MNS->toMap() : null;
        }
        if (null !== $this->rocketMQ) {
            $res['RocketMQ'] = null !== $this->rocketMQ ? $this->rocketMQ->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Notification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MNS'])) {
            $model->MNS = MNS::fromMap($map['MNS']);
        }
        if (isset($map['RocketMQ'])) {
            $model->rocketMQ = RocketMQ::fromMap($map['RocketMQ']);
        }

        return $model;
    }
}
