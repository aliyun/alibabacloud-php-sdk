<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\ListAccessTokensResponseBody\accessTokens;

use AlibabaCloud\Dara\Model;

class accessToken extends Model
{
    /**
     * @var string
     */
    public $accessTokenId;

    /**
     * @var string
     */
    public $count;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $registeredCount;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $timeToLiveInDays;
    protected $_name = [
        'accessTokenId' => 'AccessTokenId',
        'count' => 'Count',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'name' => 'Name',
        'registeredCount' => 'RegisteredCount',
        'status' => 'Status',
        'timeToLiveInDays' => 'TimeToLiveInDays',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessTokenId) {
            $res['AccessTokenId'] = $this->accessTokenId;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->registeredCount) {
            $res['RegisteredCount'] = $this->registeredCount;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->timeToLiveInDays) {
            $res['TimeToLiveInDays'] = $this->timeToLiveInDays;
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
        if (isset($map['AccessTokenId'])) {
            $model->accessTokenId = $map['AccessTokenId'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RegisteredCount'])) {
            $model->registeredCount = $map['RegisteredCount'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TimeToLiveInDays'])) {
            $model->timeToLiveInDays = $map['TimeToLiveInDays'];
        }

        return $model;
    }
}
