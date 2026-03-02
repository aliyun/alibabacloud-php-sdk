<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MqMsgPageResult extends Model
{
    /**
     * @var MqMsgDigest[]
     */
    public $mqMsgDigests;

    /**
     * @var int
     */
    public $intTotal;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'mqMsgDigests' => 'MqMsgDigests',
        'intTotal' => 'intTotal',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->mqMsgDigests)) {
            Model::validateArray($this->mqMsgDigests);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mqMsgDigests) {
            if (\is_array($this->mqMsgDigests)) {
                $res['MqMsgDigests'] = [];
                $n1 = 0;
                foreach ($this->mqMsgDigests as $item1) {
                    $res['MqMsgDigests'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->intTotal) {
            $res['intTotal'] = $this->intTotal;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['MqMsgDigests'])) {
            if (!empty($map['MqMsgDigests'])) {
                $model->mqMsgDigests = [];
                $n1 = 0;
                foreach ($map['MqMsgDigests'] as $item1) {
                    $model->mqMsgDigests[$n1] = MqMsgDigest::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['intTotal'])) {
            $model->intTotal = $map['intTotal'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
