<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class ServiceSpec extends Model
{
    /**
     * @var int
     */
    public $defaultPort;

    /**
     * @var int[]
     */
    public $extraPorts;

    /**
     * @var string
     */
    public $serviceMode;
    protected $_name = [
        'defaultPort' => 'DefaultPort',
        'extraPorts' => 'ExtraPorts',
        'serviceMode' => 'ServiceMode',
    ];

    public function validate()
    {
        if (\is_array($this->extraPorts)) {
            Model::validateArray($this->extraPorts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultPort) {
            $res['DefaultPort'] = $this->defaultPort;
        }

        if (null !== $this->extraPorts) {
            if (\is_array($this->extraPorts)) {
                $res['ExtraPorts'] = [];
                $n1 = 0;
                foreach ($this->extraPorts as $item1) {
                    $res['ExtraPorts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceMode) {
            $res['ServiceMode'] = $this->serviceMode;
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
        if (isset($map['DefaultPort'])) {
            $model->defaultPort = $map['DefaultPort'];
        }

        if (isset($map['ExtraPorts'])) {
            if (!empty($map['ExtraPorts'])) {
                $model->extraPorts = [];
                $n1 = 0;
                foreach ($map['ExtraPorts'] as $item1) {
                    $model->extraPorts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ServiceMode'])) {
            $model->serviceMode = $map['ServiceMode'];
        }

        return $model;
    }
}
