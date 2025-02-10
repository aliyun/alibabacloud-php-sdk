<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListVSwitchCidrReservationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVSwitchCidrReservationsResponseBody\vSwitchCidrReservations\tags;

class vSwitchCidrReservations extends Model
{
    /**
     * @var int
     */
    public $assignedCidrCount;
    /**
     * @var int
     */
    public $availableCidrCount;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $ipVersion;
    /**
     * @var string
     */
    public $status;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $vSwitchCidrReservationCidr;
    /**
     * @var string
     */
    public $vSwitchCidrReservationDescription;
    /**
     * @var string
     */
    public $vSwitchCidrReservationId;
    /**
     * @var string
     */
    public $vSwitchCidrReservationName;
    /**
     * @var string
     */
    public $vSwitchId;
    /**
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
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
