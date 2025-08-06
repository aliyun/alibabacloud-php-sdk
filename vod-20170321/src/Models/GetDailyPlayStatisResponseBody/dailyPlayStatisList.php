<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetDailyPlayStatisResponseBody;

use AlibabaCloud\Dara\Model;

class dailyPlayStatisList extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $date;

    /**
     * @var float
     */
    public $flow;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var int
     */
    public $playCount;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'appId' => 'AppId',
        'date' => 'Date',
        'flow' => 'Flow',
        'mediaId' => 'MediaId',
        'playCount' => 'PlayCount',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->flow) {
            $res['Flow'] = $this->flow;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->playCount) {
            $res['PlayCount'] = $this->playCount;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['Flow'])) {
            $model->flow = $map['Flow'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['PlayCount'])) {
            $model->playCount = $map['PlayCount'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
