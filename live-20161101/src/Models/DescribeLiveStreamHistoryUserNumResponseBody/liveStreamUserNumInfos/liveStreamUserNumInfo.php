<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamHistoryUserNumResponseBody\liveStreamUserNumInfos;

use AlibabaCloud\Dara\Model;

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
        'userNum' => 'UserNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
