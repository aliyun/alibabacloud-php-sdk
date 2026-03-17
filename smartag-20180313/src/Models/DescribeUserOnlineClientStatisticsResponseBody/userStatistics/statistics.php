<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUserOnlineClientStatisticsResponseBody\userStatistics;

use AlibabaCloud\Dara\Model;

class statistics extends Model
{
    /**
     * @var string
     */
    public $onlineCount;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'onlineCount' => 'OnlineCount',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->onlineCount) {
            $res['OnlineCount'] = $this->onlineCount;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['OnlineCount'])) {
            $model->onlineCount = $map['OnlineCount'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
