<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServicesResponseBody;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServicesResponseBody\serviceDirectory\serviceListStages;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\ServiceDirectoryServicesValue;
use AlibabaCloud\Tea\Model;

class serviceDirectory extends Model
{
    /**
     * @var serviceListStages[]
     */
    public $serviceListStages;

    /**
     * @var ServiceDirectoryServicesValue[]
     */
    public $services;
    protected $_name = [
        'serviceListStages' => 'ServiceListStages',
        'services'          => 'Services',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceListStages) {
            $res['ServiceListStages'] = [];
            if (null !== $this->serviceListStages && \is_array($this->serviceListStages)) {
                $n = 0;
                foreach ($this->serviceListStages as $item) {
                    $res['ServiceListStages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->services) {
            $res['Services'] = [];
            if (null !== $this->services && \is_array($this->services)) {
                foreach ($this->services as $key => $val) {
                    $res['Services'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceDirectory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceListStages'])) {
            if (!empty($map['ServiceListStages'])) {
                $model->serviceListStages = [];
                $n                        = 0;
                foreach ($map['ServiceListStages'] as $item) {
                    $model->serviceListStages[$n++] = null !== $item ? serviceListStages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Services'])) {
            $model->services = $map['Services'];
        }

        return $model;
    }
}
