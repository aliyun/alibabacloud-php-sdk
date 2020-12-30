<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagOnlineClientStatisticsResponseBody\sagStatistics;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var string
     */
    public $onlineCount;
    protected $_name = [
        'smartAGId'   => 'SmartAGId',
        'onlineCount' => 'OnlineCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->onlineCount) {
            $res['OnlineCount'] = $this->onlineCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['OnlineCount'])) {
            $model->onlineCount = $map['OnlineCount'];
        }

        return $model;
    }
}
