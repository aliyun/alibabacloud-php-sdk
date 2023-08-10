<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSynchronizationJobStatusListRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account. You do not need to specify this parameter because this parameter will be removed in the future.
     *
     * @example 12323344****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests. The **ClientToken** parameter can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe63****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of the data synchronization instances. The value is a JSON array. You can call the [DescribeSynchronizationJobs](~~49454~~) operation to query the instance IDs.
     *
     * @example ["dtsexjk1alb116****","dtskfq1149w254****"]
     *
     * @var string
     */
    public $synchronizationJobIdListJsonStr;
    protected $_name = [
        'accountId'                       => 'AccountId',
        'clientToken'                     => 'ClientToken',
        'ownerId'                         => 'OwnerId',
        'regionId'                        => 'RegionId',
        'synchronizationJobIdListJsonStr' => 'SynchronizationJobIdListJsonStr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->synchronizationJobIdListJsonStr) {
            $res['SynchronizationJobIdListJsonStr'] = $this->synchronizationJobIdListJsonStr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSynchronizationJobStatusListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SynchronizationJobIdListJsonStr'])) {
            $model->synchronizationJobIdListJsonStr = $map['SynchronizationJobIdListJsonStr'];
        }

        return $model;
    }
}
