<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsResponseBody\trafficControls\trafficControl;

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
        if (\is_array($this->trafficControl)) {
            Model::validateArray($this->trafficControl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trafficControl) {
            if (\is_array($this->trafficControl)) {
                $res['TrafficControl'] = [];
                $n1                    = 0;
                foreach ($this->trafficControl as $item1) {
                    $res['TrafficControl'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['TrafficControl'])) {
            if (!empty($map['TrafficControl'])) {
                $model->trafficControl = [];
                $n1                    = 0;
                foreach ($map['TrafficControl'] as $item1) {
                    $model->trafficControl[$n1++] = trafficControl::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
