<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTaskTrafficResponseBody\trafficControlTaskTrafficInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\TrafficControlTaskTrafficInfoTargetTrafficsDataValue;

class targetTraffics extends Model
{
    /**
     * @var TrafficControlTaskTrafficInfoTargetTrafficsDataValue[]
     */
    public $data;

    /**
     * @var string
     */
    public $trafficControlTargetId;
    protected $_name = [
        'data' => 'Data',
        'trafficControlTargetId' => 'TrafficControlTargetId',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                foreach ($this->data as $key1 => $value1) {
                    $res['Data'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->trafficControlTargetId) {
            $res['TrafficControlTargetId'] = $this->trafficControlTargetId;
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
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                foreach ($map['Data'] as $key1 => $value1) {
                    $model->data[$key1] = TrafficControlTaskTrafficInfoTargetTrafficsDataValue::fromMap($value1);
                }
            }
        }

        if (isset($map['TrafficControlTargetId'])) {
            $model->trafficControlTargetId = $map['TrafficControlTargetId'];
        }

        return $model;
    }
}
