<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentsResponseBody\data\environments;

use AlibabaCloud\Tea\Model;

class addons extends Model
{
    /**
     * @description The alias of the add-on.
     *
     * @example MySQL Exporter
     *
     * @var string
     */
    public $alias;

    /**
     * @description The description of the add-on.
     *
     * @example Collect mysql indicator information
     *
     * @var string
     */
    public $description;

    /**
     * @description The URL of the icon.
     *
     * @example http://xxxx
     *
     * @var string
     */
    public $icon;

    /**
     * @description The name of the add-on.
     *
     * @example metric-agent
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'alias' => 'Alias',
        'description' => 'Description',
        'icon' => 'Icon',
        'name' => 'Name',
    ];

    public function validate() {}

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
     * @return addons
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
