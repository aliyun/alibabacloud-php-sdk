<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class SettledPageResult extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var Settled[]
     */
    public $settleds;
    protected $_name = [
        'requestId' => 'requestId',
        'settleds' => 'settleds',
    ];

    public function validate()
    {
        if (\is_array($this->settleds)) {
            Model::validateArray($this->settleds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->settleds) {
            if (\is_array($this->settleds)) {
                $res['settleds'] = [];
                $n1 = 0;
                foreach ($this->settleds as $item1) {
                    $res['settleds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['settleds'])) {
            if (!empty($map['settleds'])) {
                $model->settleds = [];
                $n1 = 0;
                foreach ($map['settleds'] as $item1) {
                    $model->settleds[$n1] = Settled::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
