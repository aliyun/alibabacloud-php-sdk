<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\CreateInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The instance ID.
     *
     * @example airec-cn-xxxxx
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'instanceId' => 'instanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        return $model;
    }
}
