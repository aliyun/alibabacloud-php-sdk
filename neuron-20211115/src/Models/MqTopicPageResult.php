<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MqTopicPageResult extends Model
{
    /**
     * @var MqTopicDigest[]
     */
    public $mqTopicDigests;

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
        'mqTopicDigests' => 'MqTopicDigests',
        'intTotal' => 'intTotal',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->mqTopicDigests)) {
            Model::validateArray($this->mqTopicDigests);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mqTopicDigests) {
            if (\is_array($this->mqTopicDigests)) {
                $res['MqTopicDigests'] = [];
                $n1 = 0;
                foreach ($this->mqTopicDigests as $item1) {
                    $res['MqTopicDigests'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MqTopicDigests'])) {
            if (!empty($map['MqTopicDigests'])) {
                $model->mqTopicDigests = [];
                $n1 = 0;
                foreach ($map['MqTopicDigests'] as $item1) {
                    $model->mqTopicDigests[$n1] = MqTopicDigest::fromMap($item1);
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
