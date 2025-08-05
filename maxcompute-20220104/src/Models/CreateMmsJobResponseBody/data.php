<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateMmsJobResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $asyncTaskId;
    protected $_name = [
        'asyncTaskId' => 'asyncTaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncTaskId) {
            $res['asyncTaskId'] = $this->asyncTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['asyncTaskId'])) {
            $model->asyncTaskId = $map['asyncTaskId'];
        }

        return $model;
    }
}
