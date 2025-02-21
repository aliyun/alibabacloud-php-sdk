<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Dara\Model;

class ModifyDiskReplicaGroupRequest extends Model
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
    public $replicaGroupId;
    protected $_name = [
        'bandwidth'      => 'Bandwidth',
        'clientToken'    => 'ClientToken',
        'description'    => 'Description',
        'groupName'      => 'GroupName',
        'RPO'            => 'RPO',
        'regionId'       => 'RegionId',
        'replicaGroupId' => 'ReplicaGroupId',
    ];

    public function validate()
    {
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

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->RPO) {
            $res['RPO'] = $this->RPO;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->replicaGroupId) {
            $res['ReplicaGroupId'] = $this->replicaGroupId;
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

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['RPO'])) {
            $model->RPO = $map['RPO'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReplicaGroupId'])) {
            $model->replicaGroupId = $map['ReplicaGroupId'];
        }

        return $model;
    }
}
