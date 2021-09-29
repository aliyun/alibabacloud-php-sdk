<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ExecuteVehicleControlResponseBody;

use AlibabaCloud\Tea\Model;

class executionInfo extends Model
{
    /**
     * @var string
     */
    public $executionId;
    protected $_name = [
        'executionId' => 'ExecutionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }

        return $model;
    }
}
