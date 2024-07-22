<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class RemoveServiceSharedAccountsRequest extends Model
{
    /**
     * @example 10CM943JP0EN9D51H
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example service-0e6fca6a51a54420****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example SharedAccount
     *
     * @var string
     */
    public $type;

    /**
     * @description This parameter is required.
     *
     * @var int[]
     */
    public $userAliUids;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'regionId'    => 'RegionId',
        'serviceId'   => 'ServiceId',
        'type'        => 'Type',
        'userAliUids' => 'UserAliUids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userAliUids) {
            $res['UserAliUids'] = $this->userAliUids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveServiceSharedAccountsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserAliUids'])) {
            if (!empty($map['UserAliUids'])) {
                $model->userAliUids = $map['UserAliUids'];
            }
        }

        return $model;
    }
}
