<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeInstancesResponseBody\items;

use AlibabaCloud\Tea\Model;

class modelTags extends Model
{
    /**
     * @description The ID of the tag. Valid values:
     *
     *   **101**: personal sensitive information
     *   **102**: personal information
     *   **107**: general information
     *
     * @example 101
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the tag. Valid values:
     *
     *   Personal sensitive information
     *   Personal information
     *   General information
     *
     * @example personal sensitive data
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'id'   => 'Id',
        'name' => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modelTags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
