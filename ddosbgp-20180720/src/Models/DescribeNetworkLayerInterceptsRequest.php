<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Dara\Model;

class DescribeNetworkLayerInterceptsRequest extends Model
{
    /**
     * @var string
     */
    public $destinationIp;

    /**
     * @var int
     */
    public $destinationPort;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $networkProtocol;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $protocolNumber;

    /**
     * @var int
     */
    public $sourcePort;

    /**
     * @var string
     */
    public $srcIp;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'destinationIp' => 'DestinationIp',
        'destinationPort' => 'DestinationPort',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'networkProtocol' => 'NetworkProtocol',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'protocolNumber' => 'ProtocolNumber',
        'sourcePort' => 'SourcePort',
        'srcIp' => 'SrcIp',
        'startTime' => 'StartTime',
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

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->networkProtocol) {
            $res['NetworkProtocol'] = $this->networkProtocol;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->protocolNumber) {
            $res['ProtocolNumber'] = $this->protocolNumber;
        }

        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }

        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NetworkProtocol'])) {
            $model->networkProtocol = $map['NetworkProtocol'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProtocolNumber'])) {
            $model->protocolNumber = $map['ProtocolNumber'];
        }

        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }

        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
