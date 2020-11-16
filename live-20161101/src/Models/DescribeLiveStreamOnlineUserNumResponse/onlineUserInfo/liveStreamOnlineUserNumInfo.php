<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamOnlineUserNumResponse\onlineUserInfo;

use AlibabaCloud\Tea\Model;

class liveStreamOnlineUserNumInfo extends Model
{
    /**
     * @var string
     */
    public $streamUrl;

    /**
     * @var int
     */
    public $userNumber;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'streamUrl'  => 'StreamUrl',
        'userNumber' => 'UserNumber',
        'time'       => 'Time',
    ];

    public function validate()
    {
        Model::validateRequired('streamUrl', $this->streamUrl, true);
        Model::validateRequired('userNumber', $this->userNumber, true);
        Model::validateRequired('time', $this->time, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }
        if (null !== $this->userNumber) {
            $res['UserNumber'] = $this->userNumber;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }
        if (isset($map['UserNumber'])) {
            $model->userNumber = $map['UserNumber'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
