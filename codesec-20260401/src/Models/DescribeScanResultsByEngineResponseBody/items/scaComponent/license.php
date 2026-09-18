<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanResultsByEngineResponseBody\items\scaComponent;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanResultsByEngineResponseBody\items\scaComponent\license\detected;

class license extends Model
{
    /**
     * @var string
     */
    public $concluded;

    /**
     * @var detected[]
     */
    public $detected;
    protected $_name = [
        'concluded' => 'concluded',
        'detected' => 'detected',
    ];

    public function validate()
    {
        if (\is_array($this->detected)) {
            Model::validateArray($this->detected);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->concluded) {
            $res['concluded'] = $this->concluded;
        }

        if (null !== $this->detected) {
            if (\is_array($this->detected)) {
                $res['detected'] = [];
                $n1 = 0;
                foreach ($this->detected as $item1) {
                    $res['detected'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['concluded'])) {
            $model->concluded = $map['concluded'];
        }

        if (isset($map['detected'])) {
            if (!empty($map['detected'])) {
                $model->detected = [];
                $n1 = 0;
                foreach ($map['detected'] as $item1) {
                    $model->detected[$n1] = detected::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
