<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\CreateIpSetsResponseBody\ipSets;

class CreateIpSetsResponseBody extends Model
{
    /**
     * @var string
     */
    public $acceleratorId;

    /**
     * @var ipSets[]
     */
    public $ipSets;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'acceleratorId' => 'AcceleratorId',
        'ipSets' => 'IpSets',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->ipSets)) {
            Model::validateArray($this->ipSets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }

        if (null !== $this->ipSets) {
            if (\is_array($this->ipSets)) {
                $res['IpSets'] = [];
                $n1 = 0;
                foreach ($this->ipSets as $item1) {
                    $res['IpSets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }

        if (isset($map['IpSets'])) {
            if (!empty($map['IpSets'])) {
                $model->ipSets = [];
                $n1 = 0;
                foreach ($map['IpSets'] as $item1) {
                    $model->ipSets[$n1] = ipSets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
