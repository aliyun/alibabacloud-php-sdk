<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\UpdateCustomRoutingEndpointGroupDestinationsRequest;

use AlibabaCloud\Tea\Model;

class destinationConfigurations extends Model
{
    /**
     * @var string
     */
    public $destinationId;

    /**
     * @var int
     */
    public $fromPort;

    /**
     * @var string[]
     */
    public $protocols;

    /**
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
