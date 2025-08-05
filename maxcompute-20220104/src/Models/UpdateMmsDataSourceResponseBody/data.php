<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateMmsDataSourceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $asyncTaskId;

    /**
     * @var int
     */
    public $sourceId;
    protected $_name = [
        'asyncTaskId' => 'asyncTaskId',
        'sourceId' => 'sourceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncTaskId) {
            $res['asyncTaskId'] = $this->asyncTaskId;
        }
        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
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
        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        return $model;
    }
}
