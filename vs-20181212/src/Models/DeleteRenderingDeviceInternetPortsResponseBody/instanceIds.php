<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DeleteRenderingDeviceInternetPortsResponseBody;

use AlibabaCloud\Tea\Model;

class instanceIds extends Model
{
    /**
     * @var string[]
     */
    public $instanceIds;
    protected $_name = [
        'instanceIds' => 'instanceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['instanceIds'] = $this->instanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceIds'])) {
            if (!empty($map['instanceIds'])) {
                $model->instanceIds = $map['instanceIds'];
            }
        }

        return $model;
    }
}
