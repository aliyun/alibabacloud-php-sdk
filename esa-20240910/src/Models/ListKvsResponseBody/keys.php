<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListKvsResponseBody;

use AlibabaCloud\Tea\Model;

class keys extends Model
{
    /**
     * @description The key name.
     *
     * @example Key1
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the key was last updated.
     *
     * @example 2021-12-13T07:46:03Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'name'       => 'Name',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
