<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\AddServiceSharedAccountsRequest\sharedAccounts;
use AlibabaCloud\Tea\Model;

class AddServiceSharedAccountsRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example BBBAAfu+XtuBE55iRLHEYYuojI4=
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The service ID.
     *
     * This parameter is required.
     * @example service-63b8a060e9d54cxxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The shared account and permissions of the service.
     *
     * This parameter is required.
     * @var sharedAccounts[]
     */
    public $sharedAccounts;

    /**
     * @description The share type of the service. Default value: SharedAccount. Valid values:
     *
     *   SharedAccount: The service is shared by multiple accounts.
     *   Reseller: The service is distributed.
     *
     * @example SharedAccount
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'regionId'       => 'RegionId',
        'serviceId'      => 'ServiceId',
        'sharedAccounts' => 'SharedAccounts',
        'type'           => 'Type',
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
        if (null !== $this->sharedAccounts) {
            $res['SharedAccounts'] = [];
            if (null !== $this->sharedAccounts && \is_array($this->sharedAccounts)) {
                $n = 0;
                foreach ($this->sharedAccounts as $item) {
                    $res['SharedAccounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddServiceSharedAccountsRequest
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
        if (isset($map['SharedAccounts'])) {
            if (!empty($map['SharedAccounts'])) {
                $model->sharedAccounts = [];
                $n                     = 0;
                foreach ($map['SharedAccounts'] as $item) {
                    $model->sharedAccounts[$n++] = null !== $item ? sharedAccounts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
