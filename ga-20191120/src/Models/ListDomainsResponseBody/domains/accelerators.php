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
     * @description 托管实例所属的服务方ID。
     *
     * > 仅在**ServiceManaged**参数为**True**时有效。
     * @example ALB
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description 是否为托管实例。取值：
     *
     * - **true**：是托管资实例。
     *
     * - **false**：不是托管实例。
     * @example true
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description 用户在此托管实例下可执行的动作策略列表。
     * > 仅在**ServiceManaged**参数为**True**时有效。
     * > - 当实例处于托管状态时，用户对实例的操作会受到限制，某些操作行为会被禁止。
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
