<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListAddonsResponseBody\data\environments\policies;

use AlibabaCloud\Tea\Model;

class protocols extends Model
{
    /**
     * @description Description of the Protocol.
     *
     * @example ARMS
     *
     * @var string
     */
    public $description;

    /**
     * @description Icon address.
     *
     * @example http://xxxxxxx
     *
     * @var string
     */
    public $icon;

    /**
     * @description Label of the Protocol.
     *
     * @example ARMS
     *
     * @var string
     */
    public $label;

    /**
     * @description Name of the Protocol.
     *
     * @example arms
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'icon'        => 'Icon',
        'label'       => 'Label',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return protocols
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
