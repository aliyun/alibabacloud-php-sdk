<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class ApiKey extends Model
{
    /**
     * @var string
     */
    public $apiKeyID;

    /**
     * @var string
     */
    public $apiKeyMask;

    /**
     * @var string
     */
    public $apiKeyName;

    /**
     * @var string
     */
    public $apiKeyValue;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var IPConfig[]
     */
    public $ipBlacklist;

    /**
     * @var IPConfig[]
     */
    public $ipWhitelist;

    /**
     * @var string
     */
    public $lastUsedTime;

    /**
     * @var string
     */
    public $resourceGroupID;

    /**
     * @var string
     */
    public $source;

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
    public $teamPlan;

    /**
     * @var string
     */
    public $userID;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'apiKeyID' => 'apiKeyID',
        'apiKeyMask' => 'apiKeyMask',
        'apiKeyName' => 'apiKeyName',
        'apiKeyValue' => 'apiKeyValue',
        'createdTime' => 'createdTime',
        'expireTime' => 'expireTime',
        'ipBlacklist' => 'ipBlacklist',
        'ipWhitelist' => 'ipWhitelist',
        'lastUsedTime' => 'lastUsedTime',
        'resourceGroupID' => 'resourceGroupID',
        'source' => 'source',
        'status' => 'status',
        'teamID' => 'teamID',
        'teamName' => 'teamName',
        'teamPlan' => 'teamPlan',
        'userID' => 'userID',
        'username' => 'username',
    ];

    public function validate()
    {
        if (\is_array($this->ipBlacklist)) {
            Model::validateArray($this->ipBlacklist);
        }
        if (\is_array($this->ipWhitelist)) {
            Model::validateArray($this->ipWhitelist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyID) {
            $res['apiKeyID'] = $this->apiKeyID;
        }

        if (null !== $this->apiKeyMask) {
            $res['apiKeyMask'] = $this->apiKeyMask;
        }

        if (null !== $this->apiKeyName) {
            $res['apiKeyName'] = $this->apiKeyName;
        }

        if (null !== $this->apiKeyValue) {
            $res['apiKeyValue'] = $this->apiKeyValue;
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->ipBlacklist) {
            if (\is_array($this->ipBlacklist)) {
                $res['ipBlacklist'] = [];
                $n1 = 0;
                foreach ($this->ipBlacklist as $item1) {
                    $res['ipBlacklist'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipWhitelist) {
            if (\is_array($this->ipWhitelist)) {
                $res['ipWhitelist'] = [];
                $n1 = 0;
                foreach ($this->ipWhitelist as $item1) {
                    $res['ipWhitelist'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lastUsedTime) {
            $res['lastUsedTime'] = $this->lastUsedTime;
        }

        if (null !== $this->resourceGroupID) {
            $res['resourceGroupID'] = $this->resourceGroupID;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
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

        if (null !== $this->teamPlan) {
            $res['teamPlan'] = $this->teamPlan;
        }

        if (null !== $this->userID) {
            $res['userID'] = $this->userID;
        }

        if (null !== $this->username) {
            $res['username'] = $this->username;
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
        if (isset($map['apiKeyID'])) {
            $model->apiKeyID = $map['apiKeyID'];
        }

        if (isset($map['apiKeyMask'])) {
            $model->apiKeyMask = $map['apiKeyMask'];
        }

        if (isset($map['apiKeyName'])) {
            $model->apiKeyName = $map['apiKeyName'];
        }

        if (isset($map['apiKeyValue'])) {
            $model->apiKeyValue = $map['apiKeyValue'];
        }

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['ipBlacklist'])) {
            if (!empty($map['ipBlacklist'])) {
                $model->ipBlacklist = [];
                $n1 = 0;
                foreach ($map['ipBlacklist'] as $item1) {
                    $model->ipBlacklist[$n1] = IPConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ipWhitelist'])) {
            if (!empty($map['ipWhitelist'])) {
                $model->ipWhitelist = [];
                $n1 = 0;
                foreach ($map['ipWhitelist'] as $item1) {
                    $model->ipWhitelist[$n1] = IPConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['lastUsedTime'])) {
            $model->lastUsedTime = $map['lastUsedTime'];
        }

        if (isset($map['resourceGroupID'])) {
            $model->resourceGroupID = $map['resourceGroupID'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
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

        if (isset($map['teamPlan'])) {
            $model->teamPlan = $map['teamPlan'];
        }

        if (isset($map['userID'])) {
            $model->userID = $map['userID'];
        }

        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
