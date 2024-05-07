<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentsResponseBody\data\environments;

use AlibabaCloud\Tea\Model;

class features extends Model
{
    /**
     * @description The alias of the feature.
     *
     * @example Prometheus Agent
     *
     * @var string
     */
    public $alias;

    /**
     * @description The description of the feature.
     *
     * @example Collect Metric data using the Prometheus collection specification
     *
     * @var string
     */
    public $description;

    /**
     * @description The URL of the icon.
     *
     * @example http://xxx
     *
     * @var string
     */
    public $icon;

    /**
     * @description The name of the feature.
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
