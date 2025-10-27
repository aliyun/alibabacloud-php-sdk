<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Dara\Model;

class CreateFlowAliasShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $routingConfigurationsShrink;
    protected $_name = [
        'description' => 'Description',
        'flowName' => 'FlowName',
        'name' => 'Name',
        'routingConfigurationsShrink' => 'RoutingConfigurations',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->routingConfigurationsShrink) {
            $res['RoutingConfigurations'] = $this->routingConfigurationsShrink;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RoutingConfigurations'])) {
            $model->routingConfigurationsShrink = $map['RoutingConfigurations'];
        }

        return $model;
    }
}
