<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNetTestResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNetTestResultResponseBody\commTest\hosts;

/**
 * @internal
 *
 * @coversNothing
 */
class commTest extends Model
{
    /**
     * @var string
     */
    public $GPUNum;

    /**
     * @var hosts[]
     */
    public $hosts;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'GPUNum' => 'GPUNum',
        'hosts' => 'Hosts',
        'model' => 'Model',
        'type' => 'Type',
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
        if (null !== $this->GPUNum) {
            $res['GPUNum'] = $this->GPUNum;
        }

        if (null !== $this->hosts) {
            if (\is_array($this->hosts)) {
                $res['Hosts'] = [];
                $n1 = 0;
                foreach ($this->hosts as $item1) {
                    $res['Hosts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['GPUNum'])) {
            $model->GPUNum = $map['GPUNum'];
        }

        if (isset($map['Hosts'])) {
            if (!empty($map['Hosts'])) {
                $model->hosts = [];
                $n1 = 0;
                foreach ($map['Hosts'] as $item1) {
                    $model->hosts[$n1++] = hosts::fromMap($item1);
                }
            }
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
