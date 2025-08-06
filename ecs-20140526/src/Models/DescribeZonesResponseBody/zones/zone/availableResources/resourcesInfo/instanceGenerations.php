<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponseBody\zones\zone\availableResources\resourcesInfo;

use AlibabaCloud\Dara\Model;

class instanceGenerations extends Model
{
    /**
     * @var string[]
     */
    public $supportedInstanceGeneration;
    protected $_name = [
        'supportedInstanceGeneration' => 'supportedInstanceGeneration',
    ];

    public function validate()
    {
        if (\is_array($this->supportedInstanceGeneration)) {
            Model::validateArray($this->supportedInstanceGeneration);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedInstanceGeneration) {
            if (\is_array($this->supportedInstanceGeneration)) {
                $res['supportedInstanceGeneration'] = [];
                $n1 = 0;
                foreach ($this->supportedInstanceGeneration as $item1) {
                    $res['supportedInstanceGeneration'][$n1] = $item1;
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
        if (isset($map['supportedInstanceGeneration'])) {
            if (!empty($map['supportedInstanceGeneration'])) {
                $model->supportedInstanceGeneration = [];
                $n1 = 0;
                foreach ($map['supportedInstanceGeneration'] as $item1) {
                    $model->supportedInstanceGeneration[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
