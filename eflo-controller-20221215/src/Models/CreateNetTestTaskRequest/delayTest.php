<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNetTestTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNetTestTaskRequest\delayTest\hosts;

/**
 * @internal
 * @coversNothing
 */
class delayTest extends Model
{
    /**
     * @var hosts[]
     */
    public $hosts;
    protected $_name = [
        'hosts' => 'Hosts',
    ];

    public function validate()
    {
        if (\is_array($this->hosts)) {
            Model::validateArray($this->hosts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hosts) {
            if (\is_array($this->hosts)) {
                $res['Hosts'] = [];
                $n1           = 0;
                foreach ($this->hosts as $item1) {
                    $res['Hosts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Hosts'])) {
            if (!empty($map['Hosts'])) {
                $model->hosts = [];
                $n1           = 0;
                foreach ($map['Hosts'] as $item1) {
                    $model->hosts[$n1++] = hosts::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
