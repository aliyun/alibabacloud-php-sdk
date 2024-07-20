<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointGroupDestinationsRequest;

use AlibabaCloud\Tea\Model;

class destinationConfigurations extends Model
{
    /**
     * @description The ID of the mapping configuration of the endpoint group.
     *
     * This parameter is required.
     * @example dst-abc123****
     *
     * @var string
     */
    public $destinationId;

    /**
     * @description The start port of the backend service port range of the endpoint group.
     *
     * Valid values: **1** to **65499**. The **FromPort** value must be smaller than or equal to the **ToPort** value.
     *
     * You can specify up to 20 start ports in each request.
     * @example 80
     *
     * @var int
     */
    public $fromPort;

    /**
     * @description The backend service protocol of the endpoint group. Valid values:
     *
     *   **tcp**: TCP
     *   **udp**: UDP
     *   **tcp,udp**: TCP and UDP
     *
     * You can specify up to four backend service protocols in each configuration.
     * @var string[]
     */
    public $protocols;

    /**
     * @description The end port of the backend service port range of the endpoint group.
     *
     * Valid values: **1** to **65499**. The **FromPort** value must be smaller than or equal to the **ToPort** value.
     *
     * You can specify up to 20 end ports in each request.
     * @example 80
     *
     * @var int
     */
    public $toPort;
    protected $_name = [
        'destinationId' => 'DestinationId',
        'fromPort'      => 'FromPort',
        'protocols'     => 'Protocols',
        'toPort'        => 'ToPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationId) {
            $res['DestinationId'] = $this->destinationId;
        }
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
        if (isset($map['DestinationId'])) {
            $model->destinationId = $map['DestinationId'];
        }
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
