<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\UpdateClusterVolumesRequest\additionalVolumes;

use AlibabaCloud\Tea\Model;

class roles extends Model
{
    /**
     * @description The node type on which the nth additional mounted file system is mounted. Valid values:
     *
     *   Manager: management node
     *   Login: logon node
     *   Compute: compute node
     *
     * @example ["Compute"]
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
     * @return roles
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
