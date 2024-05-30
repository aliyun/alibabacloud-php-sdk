<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\AddServiceSharedAccountsRequest\sharedAccounts;
use AlibabaCloud\Tea\Model;

class AddServiceSharedAccountsRequest extends Model
{
    /**
     * @example BBBAAfu+XtuBE55iRLHEYYuojI4=
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
     * @example service-63b8a060e9d54cxxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description This parameter is required.
     *
     * @var sharedAccounts[]
     */
    public $sharedAccounts;

    /**
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
