<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetClusterVolumesResponseBody\volumes\volumeInfo\roles;

use AlibabaCloud\Tea\Model;

class roleInfo extends Model
{
    /**
     * @description The type of the node on which the file system is mounted. Valid values:
     *
     *   Compute: compute node
     *   Manager: management node
     *   Login: logon node
     *
     * @example Compute
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'name' => 'Name',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roleInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
