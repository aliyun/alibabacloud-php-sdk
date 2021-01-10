<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamHistoryUserNumResponseBody\liveStreamUserNumInfos;

use AlibabaCloud\Tea\Model;

class liveStreamUserNumInfo extends Model
{
    /**
     * @var string
     */
    public $userNum;

    /**
     * @var string
     */
    public $streamTime;
    protected $_name = [
        'userNum'    => 'UserNum',
        'streamTime' => 'StreamTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userNum) {
            $res['UserNum'] = $this->userNum;
        }
        if (null !== $this->streamTime) {
            $res['StreamTime'] = $this->streamTime;
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
        if (isset($map['UserNum'])) {
            $model->userNum = $map['UserNum'];
        }
        if (isset($map['StreamTime'])) {
            $model->streamTime = $map['StreamTime'];
        }

        return $model;
    }
}
