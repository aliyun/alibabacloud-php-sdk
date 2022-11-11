<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models;

use AlibabaCloud\Tea\Model;

class GetServiceInvokeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $callerParentIdListShrink;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'callerParentIdListShrink' => 'CallerParentIdList',
        'endTime'                  => 'EndTime',
        'id'                       => 'Id',
        'startTime'                => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callerParentIdListShrink) {
            $res['CallerParentIdList'] = $this->callerParentIdListShrink;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceInvokeShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallerParentIdList'])) {
            $model->callerParentIdListShrink = $map['CallerParentIdList'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
