<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRoomKickoutUserListResponseBody;

use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @var string
     */
    public $opEndTime;

    /**
     * @var string
     */
    public $appUid;

    /**
     * @var string
     */
    public $opStartTime;
    protected $_name = [
        'opEndTime'   => 'OpEndTime',
        'appUid'      => 'AppUid',
        'opStartTime' => 'OpStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->opEndTime) {
            $res['OpEndTime'] = $this->opEndTime;
        }
        if (null !== $this->appUid) {
            $res['AppUid'] = $this->appUid;
        }
        if (null !== $this->opStartTime) {
            $res['OpStartTime'] = $this->opStartTime;
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
        if (isset($map['OpEndTime'])) {
            $model->opEndTime = $map['OpEndTime'];
        }
        if (isset($map['AppUid'])) {
            $model->appUid = $map['AppUid'];
        }
        if (isset($map['OpStartTime'])) {
            $model->opStartTime = $map['OpStartTime'];
        }

        return $model;
    }
}
