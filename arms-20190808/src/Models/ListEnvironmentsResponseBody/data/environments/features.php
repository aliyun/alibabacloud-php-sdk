<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentsResponseBody\data\environments;

use AlibabaCloud\Tea\Model;

class features extends Model
{
    /**
     * @description Alias of Feature.
     *
     * @example Prometheus Agent
     *
     * @var string
     */
    public $alias;

    /**
     * @description Description of Feature.
     *
     * @example Collect Metric data using the Prometheus collection specification
     *
     * @var string
     */
    public $description;

    /**
     * @description Icon address.
     *
     * @example http://xxx
     *
     * @var string
     */
    public $icon;

    /**
     * @description Name of Feature.
     *
     * @example metirc-agent
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'alias'       => 'Alias',
        'description' => 'Description',
        'icon'        => 'Icon',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return features
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
