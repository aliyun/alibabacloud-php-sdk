<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MqTopicSubsPageResult extends Model
{
    /**
     * @var MqTopicSubsDigest[]
     */
    public $mqTopicSubsDigests;

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
        'mqTopicSubsDigests' => 'MqTopicSubsDigests',
        'intTotal' => 'intTotal',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->mqTopicSubsDigests)) {
            Model::validateArray($this->mqTopicSubsDigests);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mqTopicSubsDigests) {
            if (\is_array($this->mqTopicSubsDigests)) {
                $res['MqTopicSubsDigests'] = [];
                $n1 = 0;
                foreach ($this->mqTopicSubsDigests as $item1) {
                    $res['MqTopicSubsDigests'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MqTopicSubsDigests'])) {
            if (!empty($map['MqTopicSubsDigests'])) {
                $model->mqTopicSubsDigests = [];
                $n1 = 0;
                foreach ($map['MqTopicSubsDigests'] as $item1) {
                    $model->mqTopicSubsDigests[$n1] = MqTopicSubsDigest::fromMap($item1);
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
