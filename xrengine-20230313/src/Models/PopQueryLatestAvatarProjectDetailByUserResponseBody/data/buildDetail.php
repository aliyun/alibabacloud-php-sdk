<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopQueryLatestAvatarProjectDetailByUserResponseBody\data;

use AlibabaCloud\Tea\Model;

class buildDetail extends Model
{
    /**
     * @var string
     */
    public $runningTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'runningTime' => 'RunningTime',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->runningTime) {
            $res['RunningTime'] = $this->runningTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buildDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RunningTime'])) {
            $model->runningTime = $map['RunningTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
