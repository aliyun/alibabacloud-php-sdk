<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SwitchSyntheticTaskStatusRequest extends Model
{
    /**
     * @var int
     */
    public $switchStatus;

    /**
     * @var int[]
     */
    public $taskIds;
    protected $_name = [
        'switchStatus' => 'SwitchStatus',
        'taskIds'      => 'TaskIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->switchStatus) {
            $res['SwitchStatus'] = $this->switchStatus;
        }
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchSyntheticTaskStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SwitchStatus'])) {
            $model->switchStatus = $map['SwitchStatus'];
        }
        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = $map['TaskIds'];
            }
        }

        return $model;
    }
}
