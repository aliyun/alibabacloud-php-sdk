<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class ScheduledPlanExecutedStatus extends Model
{
    /**
     * @example HOT_UPDATE
     *
     * @var string
     */
    public $restartType;

    /**
     * @example UPGRADED
     *
     * @var string
     */
    public $statusState;
    protected $_name = [
        'restartType' => 'restartType',
        'statusState' => 'statusState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->restartType) {
            $res['restartType'] = $this->restartType;
        }
        if (null !== $this->statusState) {
            $res['statusState'] = $this->statusState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScheduledPlanExecutedStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['restartType'])) {
            $model->restartType = $map['restartType'];
        }
        if (isset($map['statusState'])) {
            $model->statusState = $map['statusState'];
        }

        return $model;
    }
}
