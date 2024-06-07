<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetTrafficControlTaskTrafficResponseBody\trafficControlTaskTraffic;

use AlibabaCloud\Tea\Model;

class targetTraffics extends Model
{
    /**
     * @var mixed[][]
     */
    public $data;

    /**
     * @var string
     */
    public $trafficContorlTargetId;
    protected $_name = [
        'data'                   => 'Data',
        'trafficContorlTargetId' => 'TrafficContorlTargetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->trafficContorlTargetId) {
            $res['TrafficContorlTargetId'] = $this->trafficContorlTargetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetTraffics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = $map['Data'];
            }
        }
        if (isset($map['TrafficContorlTargetId'])) {
            $model->trafficContorlTargetId = $map['TrafficContorlTargetId'];
        }

        return $model;
    }
}
