<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListAddonTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class addons extends Model
{
    /**
     * @description The addon description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The addon label
     *
     * @var string
     */
    public $label;

    /**
     * @description The addon name.
     *
     * This parameter is required.
     * @example Login
     *
     * @var string
     */
    public $name;

    /**
     * @description The addon version.
     *
     * This parameter is required.
     * @example 1.0
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'description' => 'Description',
        'label'       => 'Label',
        'name'        => 'Name',
        'version'     => 'Version',
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
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
