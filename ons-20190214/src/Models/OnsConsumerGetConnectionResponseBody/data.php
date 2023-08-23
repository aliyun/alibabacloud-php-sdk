<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerGetConnectionResponseBody;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerGetConnectionResponseBody\data\connectionList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The client connection information of the consumer group.
     *
     * @var connectionList
     */
    public $connectionList;
    protected $_name = [
        'connectionList' => 'ConnectionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionList) {
            $res['ConnectionList'] = null !== $this->connectionList ? $this->connectionList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionList'])) {
            $model->connectionList = connectionList::fromMap($map['ConnectionList']);
        }

        return $model;
    }
}
