<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsByApiResponseBody\trafficControlItems;

use AlibabaCloud\Dara\Model;

class trafficControlItem extends Model
{
    /**
     * @var string
     */
    public $boundTime;

    /**
     * @var string
     */
    public $trafficControlItemId;

    /**
     * @var string
     */
    public $trafficControlItemName;
    protected $_name = [
        'boundTime' => 'BoundTime',
        'trafficControlItemId' => 'TrafficControlItemId',
        'trafficControlItemName' => 'TrafficControlItemName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundTime) {
            $res['BoundTime'] = $this->boundTime;
        }

        if (null !== $this->trafficControlItemId) {
            $res['TrafficControlItemId'] = $this->trafficControlItemId;
        }

        if (null !== $this->trafficControlItemName) {
            $res['TrafficControlItemName'] = $this->trafficControlItemName;
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
        if (isset($map['BoundTime'])) {
            $model->boundTime = $map['BoundTime'];
        }

        if (isset($map['TrafficControlItemId'])) {
            $model->trafficControlItemId = $map['TrafficControlItemId'];
        }

        if (isset($map['TrafficControlItemName'])) {
            $model->trafficControlItemName = $map['TrafficControlItemName'];
        }

        return $model;
    }
}
