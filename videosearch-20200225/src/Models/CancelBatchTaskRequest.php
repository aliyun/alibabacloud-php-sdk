<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;

class CancelBatchTaskRequest extends Model
{
    /**
     * @var int
     */
    public $batchTaskId;
    protected $_name = [
        'batchTaskId' => 'BatchTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchTaskId) {
            $res['BatchTaskId'] = $this->batchTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelBatchTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchTaskId'])) {
            $model->batchTaskId = $map['BatchTaskId'];
        }

        return $model;
    }
}
