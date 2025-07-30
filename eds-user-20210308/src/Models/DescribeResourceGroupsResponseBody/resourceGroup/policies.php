<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeResourceGroupsResponseBody\resourceGroup;

use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @example pl-a8jnatl8kjasb***
     *
     * @var string
     */
    public $id;

    /**
     * @example False
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'id' => 'Id',
        'isDefault' => 'IsDefault',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
