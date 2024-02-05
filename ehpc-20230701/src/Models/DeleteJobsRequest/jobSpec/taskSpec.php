<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models\DeleteJobsRequest\jobSpec;

use AlibabaCloud\Tea\Model;

class taskSpec extends Model
{
    /**
     * @var int[]
     */
    public $arrayIndex;

    /**
     * @example task0
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'arrayIndex' => 'ArrayIndex',
        'taskName'   => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrayIndex) {
            $res['ArrayIndex'] = $this->arrayIndex;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrayIndex'])) {
            if (!empty($map['ArrayIndex'])) {
                $model->arrayIndex = $map['ArrayIndex'];
            }
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
