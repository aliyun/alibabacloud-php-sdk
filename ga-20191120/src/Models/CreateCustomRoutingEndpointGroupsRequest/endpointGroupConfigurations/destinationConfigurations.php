<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupsRequest\endpointGroupConfigurations;

use AlibabaCloud\Tea\Model;

class destinationConfigurations extends Model
{
    /**
     * @description The first backend service port for the endpoint group.
     *
     * Valid values: **1** to **65499**. The value of **FromPort** must be smaller than or equal to the value of **ToPort**.
     *
     * You can specify at most 20 first backend service ports for each endpoint group.
     * @example 80
     *
     * @var int
     */
    public $fromPort;

    /**
     * @description The backend service protocol.
     *
     * You can specify up to four backend service protocols in each mapping configuration.
     * @var string[]
     */
    public $protocols;

    /**
     * @description The last backend service port for the endpoint group.
     *
     * Valid values: **1** to **65499**. The value of **FromPort** must be smaller than or equal to the value of **ToPort**.
     *
     * You can specify at most 20 last backend service ports for each endpoint group.
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
