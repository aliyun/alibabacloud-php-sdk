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
     * @var string
     */
    public $lastUsedTime;

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
        'lastUsedTime' => 'lastUsedTime',
        'userID' => 'userID',
        'username' => 'username',
    ];

    public function validate()
    {
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

        if (null !== $this->lastUsedTime) {
            $res['lastUsedTime'] = $this->lastUsedTime;
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

        if (isset($map['lastUsedTime'])) {
            $model->lastUsedTime = $map['lastUsedTime'];
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
