<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorSessionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorSessionsResponseBody\trafficMirrorSessions\tags;

class trafficMirrorSessions extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $packetLength;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $trafficMirrorFilterId;

    /**
     * @var string
     */
    public $trafficMirrorSessionBusinessStatus;

    /**
     * @var string
     */
    public $trafficMirrorSessionDescription;

    /**
     * @var string
     */
    public $trafficMirrorSessionId;

    /**
     * @var string
     */
    public $trafficMirrorSessionName;

    /**
     * @var string
     */
    public $trafficMirrorSessionStatus;

    /**
     * @var string[]
     */
    public $trafficMirrorSourceIds;

    /**
     * @var string
     */
    public $trafficMirrorTargetId;

    /**
     * @var string
     */
    public $trafficMirrorTargetType;

    /**
     * @var int
     */
    public $virtualNetworkId;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'enabled' => 'Enabled',
        'packetLength' => 'PacketLength',
        'priority' => 'Priority',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
        'trafficMirrorFilterId' => 'TrafficMirrorFilterId',
        'trafficMirrorSessionBusinessStatus' => 'TrafficMirrorSessionBusinessStatus',
        'trafficMirrorSessionDescription' => 'TrafficMirrorSessionDescription',
        'trafficMirrorSessionId' => 'TrafficMirrorSessionId',
        'trafficMirrorSessionName' => 'TrafficMirrorSessionName',
        'trafficMirrorSessionStatus' => 'TrafficMirrorSessionStatus',
        'trafficMirrorSourceIds' => 'TrafficMirrorSourceIds',
        'trafficMirrorTargetId' => 'TrafficMirrorTargetId',
        'trafficMirrorTargetType' => 'TrafficMirrorTargetType',
        'virtualNetworkId' => 'VirtualNetworkId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->trafficMirrorSourceIds)) {
            Model::validateArray($this->trafficMirrorSourceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->trafficMirrorSourceIds)) {
                $res['TrafficMirrorSourceIds'] = [];
                $n1 = 0;
                foreach ($this->trafficMirrorSourceIds as $item1) {
                    $res['TrafficMirrorSourceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
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
                $model->trafficMirrorSourceIds = [];
                $n1 = 0;
                foreach ($map['TrafficMirrorSourceIds'] as $item1) {
                    $model->trafficMirrorSourceIds[$n1] = $item1;
                    ++$n1;
                }
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
