<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\StopNodesRequest;

use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The ID of the Nth node that you want to stop. Valid values of N: 1 to 100
     *
     * You can call the [ListNodes](~~87161~~) operation to query the IDs of the compute nodes.
     * @example i-bp13p7vlcb1uihf****
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'id' => 'Id',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
