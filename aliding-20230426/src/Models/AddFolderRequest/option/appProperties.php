<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\AddFolderRequest\option;

use AlibabaCloud\Tea\Model;

class appProperties extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example value
     *
     * @var string
     */
    public $value;

    /**
     * @description This parameter is required.
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $visibility;
    protected $_name = [
        'name' => 'Name',
        'value' => 'Value',
        'visibility' => 'Visibility',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appProperties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }

        return $model;
    }
}
