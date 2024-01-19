<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\ListAccessTokensResponseBody\accessTokens;

use AlibabaCloud\Tea\Model;

class accessToken extends Model
{
    /**
     * @description The ID of the activation code.
     *
     * @example at-bp1akz2zp67r0k6r****
     *
     * @var string
     */
    public $accessTokenId;

    /**
     * @description The maximum number of times that the activation code can be used. Valid values: 1 to 1000.
     *
     * Default value: 100.
     * @example 100
     *
     * @var string
     */
    public $count;

    /**
     * @description The time when the activation code was created. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-09-09T02:35:44Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the activation code.
     *
     * @example This is an activation code
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the activation code.
     *
     * @example test_name
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of migration sources whose information has been imported to Server Migration Center (SMC) by using the activation code.
     *
     * @example 5
     *
     * @var string
     */
    public $registeredCount;

    /**
     * @description The status of the activation code. Valid values:
     *
     *   activated
     *   unactivated
     *   expired
     *
     * @example activated
     *
     * @var string
     */
    public $status;

    /**
     * @description The validity period of the activation code. Unit: day. Valid values: 1 to 90. Default value: 30.
     *
     * @example 30
     *
     * @var string
     */
    public $timeToLiveInDays;
    protected $_name = [
        'accessTokenId'    => 'AccessTokenId',
        'count'            => 'Count',
        'creationTime'     => 'CreationTime',
        'description'      => 'Description',
        'name'             => 'Name',
        'registeredCount'  => 'RegisteredCount',
        'status'           => 'Status',
        'timeToLiveInDays' => 'TimeToLiveInDays',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return accessToken
     */
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
