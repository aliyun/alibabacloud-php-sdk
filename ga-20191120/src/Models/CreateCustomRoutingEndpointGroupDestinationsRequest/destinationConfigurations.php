<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateCustomRoutingEndpointGroupDestinationsRequest;

use AlibabaCloud\Tea\Model;

class destinationConfigurations extends Model
{
    /**
     * @description The first port of the backend service port range.
     *
     * Valid values: **1** to **65499**. The value of **FromPort** must be equal to or smaller than the value of **ToPort**.
     *
     * > This parameter is required.
     * @example 80
     *
     * @var int
     */
    public $fromPort;

    /**
     * @description The backend service protocol of the endpoint group. Valid values:
     *
     *   **TCP**: TCP
     *   **UDP**: UDP
     *   **TCP,UDP**: TCP and UDP
     *
     * You can specify up to four protocols for each mapping configuration.
     * @var string[]
     */
    public $protocols;

    /**
     * @description The last port of the backend service port range.
     *
     * Valid values: **1** to **65499**. The value of **FromPort** must be equal to or smaller than the value of **ToPort**.
     *
     * > This parameter is required.
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
