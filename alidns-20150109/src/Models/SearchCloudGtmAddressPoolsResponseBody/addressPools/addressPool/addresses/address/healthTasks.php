<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmAddressPoolsResponseBody\addressPools\addressPool\addresses\address;

use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmAddressPoolsResponseBody\addressPools\addressPool\addresses\address\healthTasks\healthTask;
use AlibabaCloud\Tea\Model;

class healthTasks extends Model
{
    /**
     * @var healthTask[]
     */
    public $healthTask;
    protected $_name = [
        'healthTask' => 'HealthTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthTask) {
            $res['HealthTask'] = [];
            if (null !== $this->healthTask && \is_array($this->healthTask)) {
                $n = 0;
                foreach ($this->healthTask as $item) {
                    $res['HealthTask'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthTask'])) {
            if (!empty($map['HealthTask'])) {
                $model->healthTask = [];
                $n                 = 0;
                foreach ($map['HealthTask'] as $item) {
                    $model->healthTask[$n++] = null !== $item ? healthTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
