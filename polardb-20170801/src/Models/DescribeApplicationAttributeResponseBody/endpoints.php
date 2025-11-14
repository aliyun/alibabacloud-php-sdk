<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class endpoints extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $IP;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $portDescription;
    protected $_name = [
        'description' => 'Description',
        'endpointId' => 'EndpointId',
        'IP' => 'IP',
        'netType' => 'NetType',
        'port' => 'Port',
        'portDescription' => 'PortDescription',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }

        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->portDescription) {
            $res['PortDescription'] = $this->portDescription;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }

        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['PortDescription'])) {
            $model->portDescription = $map['PortDescription'];
        }

        return $model;
    }
}
