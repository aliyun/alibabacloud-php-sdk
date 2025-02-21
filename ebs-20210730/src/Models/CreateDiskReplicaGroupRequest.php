<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ebs\V20210730\Models\CreateDiskReplicaGroupRequest\tag;

class CreateDiskReplicaGroupRequest extends Model
{
    /**
     * @var int
     */
    public $bandwidth;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $destinationRegionId;
    /**
     * @var string
     */
    public $destinationZoneId;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var int
     */
    public $RPO;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $sourceZoneId;
    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'bandwidth'           => 'Bandwidth',
        'clientToken'         => 'ClientToken',
        'description'         => 'Description',
        'destinationRegionId' => 'DestinationRegionId',
        'destinationZoneId'   => 'DestinationZoneId',
        'groupName'           => 'GroupName',
        'RPO'                 => 'RPO',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'sourceZoneId'        => 'SourceZoneId',
        'tag'                 => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->destinationRegionId) {
            $res['DestinationRegionId'] = $this->destinationRegionId;
        }

        if (null !== $this->destinationZoneId) {
            $res['DestinationZoneId'] = $this->destinationZoneId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->RPO) {
            $res['RPO'] = $this->RPO;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->sourceZoneId) {
            $res['SourceZoneId'] = $this->sourceZoneId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DestinationRegionId'])) {
            $model->destinationRegionId = $map['DestinationRegionId'];
        }

        if (isset($map['DestinationZoneId'])) {
            $model->destinationZoneId = $map['DestinationZoneId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['RPO'])) {
            $model->RPO = $map['RPO'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SourceZoneId'])) {
            $model->sourceZoneId = $map['SourceZoneId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
