<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PdpLaneInfosResult extends Model
{
    /**
     * @var PdpLaneInfo[]
     */
    public $pdpLanes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pdpLanes' => 'pdpLanes',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->pdpLanes)) {
            Model::validateArray($this->pdpLanes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pdpLanes) {
            if (\is_array($this->pdpLanes)) {
                $res['pdpLanes'] = [];
                $n1 = 0;
                foreach ($this->pdpLanes as $item1) {
                    $res['pdpLanes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['pdpLanes'])) {
            if (!empty($map['pdpLanes'])) {
                $model->pdpLanes = [];
                $n1 = 0;
                foreach ($map['pdpLanes'] as $item1) {
                    $model->pdpLanes[$n1] = PdpLaneInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
