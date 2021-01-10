<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamOnlineUserNumResponseBody\onlineUserInfo;

use AlibabaCloud\Tea\Model;

class liveStreamOnlineUserNumInfo extends Model
{
    /**
     * @var string
     */
    public $time;

    /**
     * @var int
     */
    public $userNumber;

    /**
     * @var string
     */
    public $streamUrl;
    protected $_name = [
        'time'       => 'Time',
        'userNumber' => 'UserNumber',
        'streamUrl'  => 'StreamUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->userNumber) {
            $res['UserNumber'] = $this->userNumber;
        }
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamOnlineUserNumInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['UserNumber'])) {
            $model->userNumber = $map['UserNumber'];
        }
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }

        return $model;
    }
}
