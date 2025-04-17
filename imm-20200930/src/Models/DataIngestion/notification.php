<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\DataIngestion;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\MNS;
use AlibabaCloud\SDK\Imm\V20200930\Models\RocketMQ;

class notification extends Model
{
    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var MNS
     */
    public $MNS;

    /**
     * @var RocketMQ
     */
    public $rocketMQ;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'endpoint' => 'Endpoint',
        'MNS' => 'MNS',
        'rocketMQ' => 'RocketMQ',
        'topic' => 'Topic',
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
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->MNS) {
            $res['MNS'] = null !== $this->MNS ? $this->MNS->toArray($noStream) : $this->MNS;
        }

        if (null !== $this->rocketMQ) {
            $res['RocketMQ'] = null !== $this->rocketMQ ? $this->rocketMQ->toArray($noStream) : $this->rocketMQ;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }

        if (isset($map['MNS'])) {
            $model->MNS = MNS::fromMap($map['MNS']);
        }

        if (isset($map['RocketMQ'])) {
            $model->rocketMQ = RocketMQ::fromMap($map['RocketMQ']);
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
