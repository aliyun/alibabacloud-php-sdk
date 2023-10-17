<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceNameRequest extends Model
{
    /**
     * @description The new name of the instance.
     *
     * @example new_name
     *
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'instanceName' => 'instanceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }

        return $model;
    }
}
