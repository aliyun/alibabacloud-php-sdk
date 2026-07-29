<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeNetworkLayerInterceptsResponseBody;

use AlibabaCloud\Dara\Model;

class interceptionRecords extends Model
{
    /**
     * @var string
     */
    public $destinationIp;

    /**
     * @var string
     */
    public $destinationPort;

    /**
     * @var string
     */
    public $interceptAction;

    /**
     * @var int
     */
    public $interceptCount;

    /**
     * @var int
     */
    public $interceptEndTime;

    /**
     * @var string
     */
    public $interceptModule;

    /**
     * @var int
     */
    public $interceptStartTime;

    /**
     * @var string
     */
    public $networkProtocol;

    /**
     * @var string
     */
    public $protocolNumber;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $sourcePort;
    protected $_name = [
        'destinationIp' => 'DestinationIp',
        'destinationPort' => 'DestinationPort',
        'interceptAction' => 'InterceptAction',
        'interceptCount' => 'InterceptCount',
        'interceptEndTime' => 'InterceptEndTime',
        'interceptModule' => 'InterceptModule',
        'interceptStartTime' => 'InterceptStartTime',
        'networkProtocol' => 'NetworkProtocol',
        'protocolNumber' => 'ProtocolNumber',
        'sourceIp' => 'SourceIp',
        'sourcePort' => 'SourcePort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationIp) {
            $res['DestinationIp'] = $this->destinationIp;
        }

        if (null !== $this->destinationPort) {
            $res['DestinationPort'] = $this->destinationPort;
        }

        if (null !== $this->interceptAction) {
            $res['InterceptAction'] = $this->interceptAction;
        }

        if (null !== $this->interceptCount) {
            $res['InterceptCount'] = $this->interceptCount;
        }

        if (null !== $this->interceptEndTime) {
            $res['InterceptEndTime'] = $this->interceptEndTime;
        }

        if (null !== $this->interceptModule) {
            $res['InterceptModule'] = $this->interceptModule;
        }

        if (null !== $this->interceptStartTime) {
            $res['InterceptStartTime'] = $this->interceptStartTime;
        }

        if (null !== $this->networkProtocol) {
            $res['NetworkProtocol'] = $this->networkProtocol;
        }

        if (null !== $this->protocolNumber) {
            $res['ProtocolNumber'] = $this->protocolNumber;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
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
        if (isset($map['DestinationIp'])) {
            $model->destinationIp = $map['DestinationIp'];
        }

        if (isset($map['DestinationPort'])) {
            $model->destinationPort = $map['DestinationPort'];
        }

        if (isset($map['InterceptAction'])) {
            $model->interceptAction = $map['InterceptAction'];
        }

        if (isset($map['InterceptCount'])) {
            $model->interceptCount = $map['InterceptCount'];
        }

        if (isset($map['InterceptEndTime'])) {
            $model->interceptEndTime = $map['InterceptEndTime'];
        }

        if (isset($map['InterceptModule'])) {
            $model->interceptModule = $map['InterceptModule'];
        }

        if (isset($map['InterceptStartTime'])) {
            $model->interceptStartTime = $map['InterceptStartTime'];
        }

        if (isset($map['NetworkProtocol'])) {
            $model->networkProtocol = $map['NetworkProtocol'];
        }

        if (isset($map['ProtocolNumber'])) {
            $model->protocolNumber = $map['ProtocolNumber'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }

        return $model;
    }
}
