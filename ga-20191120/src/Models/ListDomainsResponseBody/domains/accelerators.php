<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListDomainsResponseBody\domains;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListDomainsResponseBody\domains\accelerators\serviceManagedInfos;
use AlibabaCloud\Tea\Model;

class accelerators extends Model
{
    /**
     * @description The ID of the GA instance.
     *
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The name of the GA instance.
     *
     * @example Accelerator
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the service that manages the GA instance.
     *
     * >  This parameter takes effect only if **ServiceManaged** is set to **True**.
     * @example ALB
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description Indicates whether the GA instance is managed. Valid values:
     *
     *   **true**: The GA instance is managed.
     *   **false**: The GA instance is not managed.
     *
     * @example true
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description The actions that you can perform on the managed instance.
     *
     * >  This parameter takes effect only if **ServiceManaged** is set to **True**.
     *
     *   You can perform only specific actions on a managed instance.
     *
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;
    protected $_name = [
        'acceleratorId'       => 'AcceleratorId',
        'name'                => 'Name',
        'serviceId'           => 'ServiceId',
        'serviceManaged'      => 'ServiceManaged',
        'serviceManagedInfos' => 'ServiceManagedInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->serviceManagedInfos) {
            $res['ServiceManagedInfos'] = [];
            if (null !== $this->serviceManagedInfos && \is_array($this->serviceManagedInfos)) {
                $n = 0;
                foreach ($this->serviceManagedInfos as $item) {
                    $res['ServiceManagedInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accelerators
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['ServiceManagedInfos'])) {
            if (!empty($map['ServiceManagedInfos'])) {
                $model->serviceManagedInfos = [];
                $n                          = 0;
                foreach ($map['ServiceManagedInfos'] as $item) {
                    $model->serviceManagedInfos[$n++] = null !== $item ? serviceManagedInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
