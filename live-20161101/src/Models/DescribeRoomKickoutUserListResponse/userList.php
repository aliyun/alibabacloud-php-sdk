<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRoomKickoutUserListResponse;

use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @var string
     */
    public $appUid;

    /**
     * @var string
     */
    public $opStartTime;

    /**
     * @var string
     */
    public $opEndTime;
    protected $_name = [
        'appUid'      => 'AppUid',
        'opStartTime' => 'OpStartTime',
        'opEndTime'   => 'OpEndTime',
    ];

    public function validate()
    {
        Model::validateRequired('appUid', $this->appUid, true);
        Model::validateRequired('opStartTime', $this->opStartTime, true);
        Model::validateRequired('opEndTime', $this->opEndTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUid) {
            $res['AppUid'] = $this->appUid;
        }
        if (null !== $this->opStartTime) {
            $res['OpStartTime'] = $this->opStartTime;
        }
        if (null !== $this->opEndTime) {
            $res['OpEndTime'] = $this->opEndTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppUid'])) {
            $model->appUid = $map['AppUid'];
        }
        if (isset($map['OpStartTime'])) {
            $model->opStartTime = $map['OpStartTime'];
        }
        if (isset($map['OpEndTime'])) {
            $model->opEndTime = $map['OpEndTime'];
        }

        return $model;
    }
}
