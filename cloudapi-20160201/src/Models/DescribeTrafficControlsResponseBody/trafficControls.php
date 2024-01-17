<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeTrafficControlsResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160201\Models\DescribeTrafficControlsResponseBody\trafficControls\trafficControl;
use AlibabaCloud\Tea\Model;

class trafficControls extends Model
{
    /**
     * @var trafficControl[]
     */
    public $trafficControl;
    protected $_name = [
        'trafficControl' => 'TrafficControl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trafficControl) {
            $res['TrafficControl'] = [];
            if (null !== $this->trafficControl && \is_array($this->trafficControl)) {
                $n = 0;
                foreach ($this->trafficControl as $item) {
                    $res['TrafficControl'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficControls
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrafficControl'])) {
            if (!empty($map['TrafficControl'])) {
                $model->trafficControl = [];
                $n                     = 0;
                foreach ($map['TrafficControl'] as $item) {
                    $model->trafficControl[$n++] = null !== $item ? trafficControl::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
