<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PdpPbcListResult extends Model
{
    /**
     * @var PdpPbc[]
     */
    public $pdpPbcs;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'pdpPbcs' => 'pdpPbcs',
        'requestId' => 'requestId',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->pdpPbcs)) {
            Model::validateArray($this->pdpPbcs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pdpPbcs) {
            if (\is_array($this->pdpPbcs)) {
                $res['pdpPbcs'] = [];
                $n1 = 0;
                foreach ($this->pdpPbcs as $item1) {
                    $res['pdpPbcs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['pdpPbcs'])) {
            if (!empty($map['pdpPbcs'])) {
                $model->pdpPbcs = [];
                $n1 = 0;
                foreach ($map['pdpPbcs'] as $item1) {
                    $model->pdpPbcs[$n1] = PdpPbc::fromMap($item1);
                    ++$n1;
                }
            }
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
