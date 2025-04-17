<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\AddServiceSharedAccountsRequest\sharedAccounts;

class AddServiceSharedAccountsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var sharedAccounts[]
     */
    public $sharedAccounts;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'regionId' => 'RegionId',
        'serviceId' => 'ServiceId',
        'sharedAccounts' => 'SharedAccounts',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->sharedAccounts)) {
            Model::validateArray($this->sharedAccounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->sharedAccounts)) {
                $res['SharedAccounts'] = [];
                $n1 = 0;
                foreach ($this->sharedAccounts as $item1) {
                    $res['SharedAccounts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
                $n1 = 0;
                foreach ($map['SharedAccounts'] as $item1) {
                    $model->sharedAccounts[$n1++] = sharedAccounts::fromMap($item1);
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
