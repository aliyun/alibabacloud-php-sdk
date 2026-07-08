<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class E2BTeam extends Model
{
    /**
     * @var bool
     */
    public $allowUpdateTeamName;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $resourceGroupID;

    /**
     * @var string
     */
    public $status;

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
        'allowUpdateTeamName' => 'allowUpdateTeamName',
        'createdTime' => 'createdTime',
        'description' => 'description',
        'resourceGroupID' => 'resourceGroupID',
        'status' => 'status',
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
        if (null !== $this->allowUpdateTeamName) {
            $res['allowUpdateTeamName'] = $this->allowUpdateTeamName;
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->resourceGroupID) {
            $res['resourceGroupID'] = $this->resourceGroupID;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['allowUpdateTeamName'])) {
            $model->allowUpdateTeamName = $map['allowUpdateTeamName'];
        }

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['resourceGroupID'])) {
            $model->resourceGroupID = $map['resourceGroupID'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
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
