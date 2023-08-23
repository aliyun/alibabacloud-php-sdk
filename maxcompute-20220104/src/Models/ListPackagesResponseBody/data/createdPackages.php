<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListPackagesResponseBody\data;

use AlibabaCloud\Tea\Model;

class createdPackages extends Model
{
    /**
     * @description The time when the package was created.
     *
     * @example 2022-08-02T02:30:34Z
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The name of the package.
     *
     * @example packageA
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'createTime' => 'createTime',
        'name'       => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createdPackages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
