<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListVSwitchCidrReservationsResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVSwitchCidrReservationsResponseBody\vSwitchCidrReservations\tags;
use AlibabaCloud\Tea\Model;

class vSwitchCidrReservations extends Model
{
    /**
     * @description The number of used prefixes in the reserved CIDR block.
     *
     * @example 6
     *
     * @var int
     */
    public $assignedCidrCount;

    /**
     * @description The number of available prefixes in the reserved CIDR block.
     *
     * @example 10
     *
     * @var int
     */
    public $availableCidrCount;

    /**
     * @description The time when the reserved CIDR block was created.
     *
     * @example 2023-03-14T10:02:37Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The IP version of the reserved CIDR block. Valid values:
     *
     *   **IPv4** (default)
     *   **IPv6**
     *
     * @example IPv4
     *
     * @var string
     */
    public $ipVersion;

    /**
     * @description The status of the reserved CIDR block. Valid values:
     *
     *   **Assigning**
     *   **Assigned**
     *   **Releasing**
     *   **Released**
     *
     * @example Assigned
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The type of the reserved CIDR block. Valid value: **prefix**. CIDR blocks are allocated from the reserved CIDR block.
     *
     * @example prefix
     *
     * @var string
     */
    public $type;

    /**
     * @description The reserved CIDR block.
     *
     * @example 192.168.1.64/28
     *
     * @var string
     */
    public $vSwitchCidrReservationCidr;

    /**
     * @description The description of the reserved CIDR block.
     *
     * @example ReservationDescription
     *
     * @var string
     */
    public $vSwitchCidrReservationDescription;

    /**
     * @description The ID of the reserved CIDR block.
     *
     * @example vcr-bp1m12saqteraw3rp****
     *
     * @var string
     */
    public $vSwitchCidrReservationId;

    /**
     * @description The name of the reserved CIDR block.
     *
     * @example ReservationName
     *
     * @var string
     */
    public $vSwitchCidrReservationName;

    /**
     * @description The ID of the vSwitch to which the reserved CIDR block belongs.
     *
     * @example vsw-25navfgbue4g****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The virtual private cloud (VPC) to which the reserved CIDR block belongs.
     *
     * @example vpc-bp1wdz2pdhgurz1od****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'assignedCidrCount'                 => 'AssignedCidrCount',
        'availableCidrCount'                => 'AvailableCidrCount',
        'creationTime'                      => 'CreationTime',
        'ipVersion'                         => 'IpVersion',
        'status'                            => 'Status',
        'tags'                              => 'Tags',
        'type'                              => 'Type',
        'vSwitchCidrReservationCidr'        => 'VSwitchCidrReservationCidr',
        'vSwitchCidrReservationDescription' => 'VSwitchCidrReservationDescription',
        'vSwitchCidrReservationId'          => 'VSwitchCidrReservationId',
        'vSwitchCidrReservationName'        => 'VSwitchCidrReservationName',
        'vSwitchId'                         => 'VSwitchId',
        'vpcId'                             => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignedCidrCount) {
            $res['AssignedCidrCount'] = $this->assignedCidrCount;
        }
        if (null !== $this->availableCidrCount) {
            $res['AvailableCidrCount'] = $this->availableCidrCount;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vSwitchCidrReservationCidr) {
            $res['VSwitchCidrReservationCidr'] = $this->vSwitchCidrReservationCidr;
        }
        if (null !== $this->vSwitchCidrReservationDescription) {
            $res['VSwitchCidrReservationDescription'] = $this->vSwitchCidrReservationDescription;
        }
        if (null !== $this->vSwitchCidrReservationId) {
            $res['VSwitchCidrReservationId'] = $this->vSwitchCidrReservationId;
        }
        if (null !== $this->vSwitchCidrReservationName) {
            $res['VSwitchCidrReservationName'] = $this->vSwitchCidrReservationName;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vSwitchCidrReservations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssignedCidrCount'])) {
            $model->assignedCidrCount = $map['AssignedCidrCount'];
        }
        if (isset($map['AvailableCidrCount'])) {
            $model->availableCidrCount = $map['AvailableCidrCount'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VSwitchCidrReservationCidr'])) {
            $model->vSwitchCidrReservationCidr = $map['VSwitchCidrReservationCidr'];
        }
        if (isset($map['VSwitchCidrReservationDescription'])) {
            $model->vSwitchCidrReservationDescription = $map['VSwitchCidrReservationDescription'];
        }
        if (isset($map['VSwitchCidrReservationId'])) {
            $model->vSwitchCidrReservationId = $map['VSwitchCidrReservationId'];
        }
        if (isset($map['VSwitchCidrReservationName'])) {
            $model->vSwitchCidrReservationName = $map['VSwitchCidrReservationName'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
