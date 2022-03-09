<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class GetBimFragmentListRequest extends Model
{
    /**
     * @var int
     */
    public $drawingId;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'drawingId' => 'DrawingId',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drawingId) {
            $res['DrawingId'] = $this->drawingId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBimFragmentListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrawingId'])) {
            $model->drawingId = $map['DrawingId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
