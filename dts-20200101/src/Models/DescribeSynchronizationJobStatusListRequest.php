<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSynchronizationJobStatusListRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
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
