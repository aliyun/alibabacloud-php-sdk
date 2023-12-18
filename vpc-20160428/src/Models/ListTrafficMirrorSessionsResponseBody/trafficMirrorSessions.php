<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorSessionsResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorSessionsResponseBody\trafficMirrorSessions\tags;
use AlibabaCloud\Tea\Model;

class trafficMirrorSessions extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @description Indicates whether the traffic mirror session was enabled.
     *
     *   **false**: the traffic mirror session was disabled. This is the default value.
     *   **true**: the traffic mirror session was enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The maximum transmission unit (MTU).
     *
     * @example 1500
     *
     * @var int
     */
    public $packetLength;

    /**
     * @description The priority of the traffic mirror session.
     *
     * A smaller value indicates a higher priority.
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ID of the resource group to which the mirrored traffic belongs.
     *
     * @example rg-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The list of tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the traffic mirror filter.
     *
     * @example tmf-j6cmls82xnc86vtpe****
     *
     * @var string
     */
    public $trafficMirrorFilterId;

    /**
     * @description The status of the traffic mirror session.
     *
     *   **Normal**: active
     *   **FinancialLocked**: locked due to overdue payments
     *
     * @example Normal
     *
     * @var string
     */
    public $trafficMirrorSessionBusinessStatus;

    /**
     * @description The description of the traffic mirror session.
     *
     * @example This is a session.
     *
     * @var string
     */
    public $trafficMirrorSessionDescription;

    /**
     * @description The ID of the traffic mirror session.
     *
     * @example tms-j6cla50buc44ap8tu****
     *
     * @var string
     */
    public $trafficMirrorSessionId;

    /**
     * @description The name of the traffic mirror session.
     *
     * @example abc
     *
     * @var string
     */
    public $trafficMirrorSessionName;

    /**
     * @description The status of the traffic mirror session. Valid values:
     *
     *   **Creating**
     *   **Created**
     *   **Modifying**
     *   **Deleting**
     *
     * @example Created
     *
     * @var string
     */
    public $trafficMirrorSessionStatus;

    /**
     * @description The ID of the mirror source.
     *
     * @var string[]
     */
    public $trafficMirrorSourceIds;

    /**
     * @description The ID of the mirror destination.
     *
     * @example eni-j6c2fp57q8rr47rp****
     *
     * @var string
     */
    public $trafficMirrorTargetId;

    /**
     * @description The type of the traffic mirror destination. Valid values:
     *
     *   **NetworkInterface**: an ENI
     *   **SLB**: an internal-facing SLB instance
     *
     * @example NetworkInterface
     *
     * @var string
     */
    public $trafficMirrorTargetType;

    /**
     * @description You can specify VNIs to distinguish different mirrored traffic.
     *
     * @example 10
     *
     * @var int
     */
    public $virtualNetworkId;
    protected $_name = [
        'creationTime'                       => 'CreationTime',
        'enabled'                            => 'Enabled',
        'packetLength'                       => 'PacketLength',
        'priority'                           => 'Priority',
        'resourceGroupId'                    => 'ResourceGroupId',
        'tags'                               => 'Tags',
        'trafficMirrorFilterId'              => 'TrafficMirrorFilterId',
        'trafficMirrorSessionBusinessStatus' => 'TrafficMirrorSessionBusinessStatus',
        'trafficMirrorSessionDescription'    => 'TrafficMirrorSessionDescription',
        'trafficMirrorSessionId'             => 'TrafficMirrorSessionId',
        'trafficMirrorSessionName'           => 'TrafficMirrorSessionName',
        'trafficMirrorSessionStatus'         => 'TrafficMirrorSessionStatus',
        'trafficMirrorSourceIds'             => 'TrafficMirrorSourceIds',
        'trafficMirrorTargetId'              => 'TrafficMirrorTargetId',
        'trafficMirrorTargetType'            => 'TrafficMirrorTargetType',
        'virtualNetworkId'                   => 'VirtualNetworkId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->packetLength) {
            $res['PacketLength'] = $this->packetLength;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->trafficMirrorFilterId) {
            $res['TrafficMirrorFilterId'] = $this->trafficMirrorFilterId;
        }
        if (null !== $this->trafficMirrorSessionBusinessStatus) {
            $res['TrafficMirrorSessionBusinessStatus'] = $this->trafficMirrorSessionBusinessStatus;
        }
        if (null !== $this->trafficMirrorSessionDescription) {
            $res['TrafficMirrorSessionDescription'] = $this->trafficMirrorSessionDescription;
        }
        if (null !== $this->trafficMirrorSessionId) {
            $res['TrafficMirrorSessionId'] = $this->trafficMirrorSessionId;
        }
        if (null !== $this->trafficMirrorSessionName) {
            $res['TrafficMirrorSessionName'] = $this->trafficMirrorSessionName;
        }
        if (null !== $this->trafficMirrorSessionStatus) {
            $res['TrafficMirrorSessionStatus'] = $this->trafficMirrorSessionStatus;
        }
        if (null !== $this->trafficMirrorSourceIds) {
            $res['TrafficMirrorSourceIds'] = $this->trafficMirrorSourceIds;
        }
        if (null !== $this->trafficMirrorTargetId) {
            $res['TrafficMirrorTargetId'] = $this->trafficMirrorTargetId;
        }
        if (null !== $this->trafficMirrorTargetType) {
            $res['TrafficMirrorTargetType'] = $this->trafficMirrorTargetType;
        }
        if (null !== $this->virtualNetworkId) {
            $res['VirtualNetworkId'] = $this->virtualNetworkId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficMirrorSessions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['PacketLength'])) {
            $model->packetLength = $map['PacketLength'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TrafficMirrorFilterId'])) {
            $model->trafficMirrorFilterId = $map['TrafficMirrorFilterId'];
        }
        if (isset($map['TrafficMirrorSessionBusinessStatus'])) {
            $model->trafficMirrorSessionBusinessStatus = $map['TrafficMirrorSessionBusinessStatus'];
        }
        if (isset($map['TrafficMirrorSessionDescription'])) {
            $model->trafficMirrorSessionDescription = $map['TrafficMirrorSessionDescription'];
        }
        if (isset($map['TrafficMirrorSessionId'])) {
            $model->trafficMirrorSessionId = $map['TrafficMirrorSessionId'];
        }
        if (isset($map['TrafficMirrorSessionName'])) {
            $model->trafficMirrorSessionName = $map['TrafficMirrorSessionName'];
        }
        if (isset($map['TrafficMirrorSessionStatus'])) {
            $model->trafficMirrorSessionStatus = $map['TrafficMirrorSessionStatus'];
        }
        if (isset($map['TrafficMirrorSourceIds'])) {
            if (!empty($map['TrafficMirrorSourceIds'])) {
                $model->trafficMirrorSourceIds = $map['TrafficMirrorSourceIds'];
            }
        }
        if (isset($map['TrafficMirrorTargetId'])) {
            $model->trafficMirrorTargetId = $map['TrafficMirrorTargetId'];
        }
        if (isset($map['TrafficMirrorTargetType'])) {
            $model->trafficMirrorTargetType = $map['TrafficMirrorTargetType'];
        }
        if (isset($map['VirtualNetworkId'])) {
            $model->virtualNetworkId = $map['VirtualNetworkId'];
        }

        return $model;
    }
}
