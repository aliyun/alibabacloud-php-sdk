<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamHistoryUserNumResponse\liveStreamUserNumInfos;

use AlibabaCloud\Tea\Model;

class liveStreamUserNumInfo extends Model
{
    /**
     * @var string
     */
    public $streamTime;

    /**
     * @var string
     */
    public $userNum;
    protected $_name = [
        'streamTime' => 'StreamTime',
        'userNum'    => 'UserNum',
    ];

    public function validate()
    {
        Model::validateRequired('streamTime', $this->streamTime, true);
        Model::validateRequired('userNum', $this->userNum, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamTime) {
            $res['StreamTime'] = $this->streamTime;
        }
        if (null !== $this->userNum) {
            $res['UserNum'] = $this->userNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamUserNumInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StreamTime'])) {
            $model->streamTime = $map['StreamTime'];
        }
        if (isset($map['UserNum'])) {
            $model->userNum = $map['UserNum'];
        }

        return $model;
    }
}
