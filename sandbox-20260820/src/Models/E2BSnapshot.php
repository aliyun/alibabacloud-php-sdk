<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class E2BSnapshot extends Model
{
    /**
     * @var float
     */
    public $cpuCount;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var int
     */
    public $memoryMB;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceGroupID;

    /**
     * @var string
     */
    public $snapshotID;

    /**
     * @var string
     */
    public $sourceSandboxID;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $teamID;

    /**
     * @var string
     */
    public $teamName;

    /**
     * @var string
     */
    public $userID;
    protected $_name = [
        'cpuCount' => 'cpuCount',
        'createdTime' => 'createdTime',
        'expiredTime' => 'expiredTime',
        'memoryMB' => 'memoryMB',
        'name' => 'name',
        'resourceGroupID' => 'resourceGroupID',
        'snapshotID' => 'snapshotID',
        'sourceSandboxID' => 'sourceSandboxID',
        'status' => 'status',
        'tag' => 'tag',
        'teamID' => 'teamID',
        'teamName' => 'teamName',
        'userID' => 'userID',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuCount) {
            $res['cpuCount'] = $this->cpuCount;
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->expiredTime) {
            $res['expiredTime'] = $this->expiredTime;
        }

        if (null !== $this->memoryMB) {
            $res['memoryMB'] = $this->memoryMB;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->resourceGroupID) {
            $res['resourceGroupID'] = $this->resourceGroupID;
        }

        if (null !== $this->snapshotID) {
            $res['snapshotID'] = $this->snapshotID;
        }

        if (null !== $this->sourceSandboxID) {
            $res['sourceSandboxID'] = $this->sourceSandboxID;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
        }

        if (null !== $this->teamName) {
            $res['teamName'] = $this->teamName;
        }

        if (null !== $this->userID) {
            $res['userID'] = $this->userID;
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
        if (isset($map['cpuCount'])) {
            $model->cpuCount = $map['cpuCount'];
        }

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['expiredTime'])) {
            $model->expiredTime = $map['expiredTime'];
        }

        if (isset($map['memoryMB'])) {
            $model->memoryMB = $map['memoryMB'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['resourceGroupID'])) {
            $model->resourceGroupID = $map['resourceGroupID'];
        }

        if (isset($map['snapshotID'])) {
            $model->snapshotID = $map['snapshotID'];
        }

        if (isset($map['sourceSandboxID'])) {
            $model->sourceSandboxID = $map['sourceSandboxID'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        if (isset($map['teamName'])) {
            $model->teamName = $map['teamName'];
        }

        if (isset($map['userID'])) {
            $model->userID = $map['userID'];
        }

        return $model;
    }
}
