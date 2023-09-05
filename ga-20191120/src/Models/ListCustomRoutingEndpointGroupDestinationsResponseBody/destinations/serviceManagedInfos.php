<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointGroupDestinationsResponseBody\destinations;

use AlibabaCloud\Tea\Model;

class serviceManagedInfos extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @description 子资源类型，取值：
     * - **Listener**：监听资源。
     * - **IpSet**：加速地域资源。
     * - **EndpointGroup**：终端节点组资源。
     * - **ForwardingRule**：转发策略资源。
     * - **Endpoint**：终端节点资源。
     * - **EndpointGroupDestination**：自定义路由监听下的终端节点组协议映射资源。
     * - **EndpointPolicy**：自定义路由监听下的终端节点通行策略资源。
     * > 仅在**Action**参数为**CreateChild**时有效
     * @example Listener
     *
     * @var string
     */
    public $childType;

    /**
     * @description 托管策略动作是否被托管，取值：
     * - **true**：托管策略动作被托管，用户无权在托管实例下执行Action指定的操作。
     * - **false**：托管策略动作未被托管，用户可在托管实例下执行Action指定的操作。
     * @example false
     *
     * @var bool
     */
    public $isManaged;
    protected $_name = [
        'action'    => 'Action',
        'childType' => 'ChildType',
        'isManaged' => 'IsManaged',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->childType) {
            $res['ChildType'] = $this->childType;
        }
        if (null !== $this->isManaged) {
            $res['IsManaged'] = $this->isManaged;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceManagedInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ChildType'])) {
            $model->childType = $map['ChildType'];
        }
        if (isset($map['IsManaged'])) {
            $model->isManaged = $map['IsManaged'];
        }

        return $model;
    }
}
