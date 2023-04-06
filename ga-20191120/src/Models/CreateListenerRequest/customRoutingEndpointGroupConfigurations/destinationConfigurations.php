<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateListenerRequest\customRoutingEndpointGroupConfigurations;

use AlibabaCloud\Tea\Model;

class destinationConfigurations extends Model
{
    /**
     * @description The first port used by the endpoint group that is associated with the custom routing listener.
     *
     * Valid values: **1** to **65499**. The value of **FromPort** must be equal to or smaller than the value of **ToPort**.
     *
     * You can specify up to 20 first ports for an endpoint group of a custom routing listener.
     *
     * > You can configure endpoint groups and endpoints for a custom routing listener only if the **Type** parameter is set to **CustomRouting**.
     * @example 80
     *
     * @var int
     */
    public $fromPort;

    /**
     * @description The protocol used by the endpoint group that is associated with the custom routing listener.
     *
     * You can specify up to four protocols in each mapping configuration for an endpoint group of a custom routing listener.
     *
     * > You can configure endpoint groups and endpoints for a custom routing listener only if the **Type** parameter is set to **CustomRouting**.
     * @var string[]
     */
    public $protocols;

    /**
     * @description The last port used by the endpoint group that is associated with the custom routing listener.
     *
     * Valid values: **1** to **65499**. The value of **FromPort** must be equal to or smaller than the value of **ToPort**.
     *
     * You can specify up to 20 last ports for an endpoint group of a custom routing listener.
     *
     * > You can configure endpoint groups and endpoints for a custom routing listener only if the **Type** parameter is set to **CustomRouting**.
     * @example 80
     *
     * @var int
     */
    public $toPort;
    protected $_name = [
        'fromPort'  => 'FromPort',
        'protocols' => 'Protocols',
        'toPort'    => 'ToPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromPort) {
            $res['FromPort'] = $this->fromPort;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = $this->protocols;
        }
        if (null !== $this->toPort) {
            $res['ToPort'] = $this->toPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destinationConfigurations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromPort'])) {
            $model->fromPort = $map['FromPort'];
        }
        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = $map['Protocols'];
            }
        }
        if (isset($map['ToPort'])) {
            $model->toPort = $map['ToPort'];
        }

        return $model;
    }
}
