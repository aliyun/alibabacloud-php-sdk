<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorAccessSessionLogsResponseBody;

use AlibabaCloud\Tea\Model;

class accessSessionLogs extends Model
{
    /**
     * @var string
     */
    public $clientToServiceFlow;

    /**
     * @var string
     */
    public $destinationIp;

    /**
     * @var string
     */
    public $destinationPort;

    /**
     * @var string[]
     */
    public $destinations;

    /**
     * @var string
     */
    public $serviceToClientFlow;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'clientToServiceFlow' => 'ClientToServiceFlow',
        'destinationIp'       => 'DestinationIp',
        'destinationPort'     => 'DestinationPort',
        'destinations'        => 'Destinations',
        'serviceToClientFlow' => 'ServiceToClientFlow',
        'sourceIp'            => 'SourceIp',
        'time'                => 'Time',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToServiceFlow) {
            $res['ClientToServiceFlow'] = $this->clientToServiceFlow;
        }
        if (null !== $this->destinationIp) {
            $res['DestinationIp'] = $this->destinationIp;
        }
        if (null !== $this->destinationPort) {
            $res['DestinationPort'] = $this->destinationPort;
        }
        if (null !== $this->destinations) {
            $res['Destinations'] = $this->destinations;
        }
        if (null !== $this->serviceToClientFlow) {
            $res['ServiceToClientFlow'] = $this->serviceToClientFlow;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessSessionLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToServiceFlow'])) {
            $model->clientToServiceFlow = $map['ClientToServiceFlow'];
        }
        if (isset($map['DestinationIp'])) {
            $model->destinationIp = $map['DestinationIp'];
        }
        if (isset($map['DestinationPort'])) {
            $model->destinationPort = $map['DestinationPort'];
        }
        if (isset($map['Destinations'])) {
            if (!empty($map['Destinations'])) {
                $model->destinations = $map['Destinations'];
            }
        }
        if (isset($map['ServiceToClientFlow'])) {
            $model->serviceToClientFlow = $map['ServiceToClientFlow'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
