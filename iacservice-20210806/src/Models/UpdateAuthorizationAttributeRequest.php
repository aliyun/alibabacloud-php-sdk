<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class UpdateAuthorizationAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $dueTime;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'dueTime' => 'dueTime',
        'name'    => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dueTime) {
            $res['dueTime'] = $this->dueTime;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAuthorizationAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dueTime'])) {
            $model->dueTime = $map['dueTime'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
