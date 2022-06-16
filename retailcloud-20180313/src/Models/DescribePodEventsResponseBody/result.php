<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribePodEventsResponseBody;

use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribePodEventsResponseBody\result\podEvents;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $deployOrderName;

    /**
     * @var podEvents[]
     */
    public $podEvents;
    protected $_name = [
        'deployOrderName' => 'DeployOrderName',
        'podEvents'       => 'PodEvents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployOrderName) {
            $res['DeployOrderName'] = $this->deployOrderName;
        }
        if (null !== $this->podEvents) {
            $res['PodEvents'] = [];
            if (null !== $this->podEvents && \is_array($this->podEvents)) {
                $n = 0;
                foreach ($this->podEvents as $item) {
                    $res['PodEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployOrderName'])) {
            $model->deployOrderName = $map['DeployOrderName'];
        }
        if (isset($map['PodEvents'])) {
            if (!empty($map['PodEvents'])) {
                $model->podEvents = [];
                $n                = 0;
                foreach ($map['PodEvents'] as $item) {
                    $model->podEvents[$n++] = null !== $item ? podEvents::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
