<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models\UpdateFlowAliasResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Fnf\V20190315\Models\UpdateFlowAliasResponseBody\alias\routingConfigurations;

class alias extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var routingConfigurations[]
     */
    public $routingConfigurations;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'name' => 'Name',
        'routingConfigurations' => 'RoutingConfigurations',
    ];

    public function validate()
    {
        if (\is_array($this->routingConfigurations)) {
            Model::validateArray($this->routingConfigurations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->routingConfigurations) {
            if (\is_array($this->routingConfigurations)) {
                $res['RoutingConfigurations'] = [];
                $n1 = 0;
                foreach ($this->routingConfigurations as $item1) {
                    $res['RoutingConfigurations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RoutingConfigurations'])) {
            if (!empty($map['RoutingConfigurations'])) {
                $model->routingConfigurations = [];
                $n1 = 0;
                foreach ($map['RoutingConfigurations'] as $item1) {
                    $model->routingConfigurations[$n1] = routingConfigurations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
