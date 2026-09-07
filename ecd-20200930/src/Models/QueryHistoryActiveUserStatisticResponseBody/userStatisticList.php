<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\QueryHistoryActiveUserStatisticResponseBody;

use AlibabaCloud\Dara\Model;

class userStatisticList extends Model
{
    /**
     * @var int
     */
    public $activeUserCount;

    /**
     * @var string
     */
    public $formatDate;

    /**
     * @var int
     */
    public $timeStamp;
    protected $_name = [
        'activeUserCount' => 'ActiveUserCount',
        'formatDate' => 'FormatDate',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeUserCount) {
            $res['ActiveUserCount'] = $this->activeUserCount;
        }

        if (null !== $this->formatDate) {
            $res['FormatDate'] = $this->formatDate;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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
        if (isset($map['ActiveUserCount'])) {
            $model->activeUserCount = $map['ActiveUserCount'];
        }

        if (isset($map['FormatDate'])) {
            $model->formatDate = $map['FormatDate'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
