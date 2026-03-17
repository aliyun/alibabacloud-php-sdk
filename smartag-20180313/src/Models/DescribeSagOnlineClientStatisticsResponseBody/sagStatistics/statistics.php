<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagOnlineClientStatisticsResponseBody\sagStatistics;

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
    public $smartAGId;
    protected $_name = [
        'onlineCount' => 'OnlineCount',
        'smartAGId' => 'SmartAGId',
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

        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
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

        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }

        return $model;
    }
}
