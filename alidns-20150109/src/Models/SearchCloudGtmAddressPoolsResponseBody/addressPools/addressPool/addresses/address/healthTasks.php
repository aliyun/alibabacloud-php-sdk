<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmAddressPoolsResponseBody\addressPools\addressPool\addresses\address;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmAddressPoolsResponseBody\addressPools\addressPool\addresses\address\healthTasks\healthTask;

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
        if (\is_array($this->healthTask)) {
            Model::validateArray($this->healthTask);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->healthTask) {
            if (\is_array($this->healthTask)) {
                $res['HealthTask'] = [];
                $n1                = 0;
                foreach ($this->healthTask as $item1) {
                    $res['HealthTask'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HealthTask'])) {
            if (!empty($map['HealthTask'])) {
                $model->healthTask = [];
                $n1                = 0;
                foreach ($map['HealthTask'] as $item1) {
                    $model->healthTask[$n1++] = healthTask::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
