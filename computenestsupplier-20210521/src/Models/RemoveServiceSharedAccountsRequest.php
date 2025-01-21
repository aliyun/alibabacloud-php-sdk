<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class RemoveServiceSharedAccountsRequest extends Model
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
     * @var string
     */
    public $type;
    /**
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
        if (\is_array($this->userAliUids)) {
            Model::validateArray($this->userAliUids);
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

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->userAliUids) {
            if (\is_array($this->userAliUids)) {
                $res['UserAliUids'] = [];
                $n1                 = 0;
                foreach ($this->userAliUids as $item1) {
                    $res['UserAliUids'][$n1++] = $item1;
                }
            }
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

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UserAliUids'])) {
            if (!empty($map['UserAliUids'])) {
                $model->userAliUids = [];
                $n1                 = 0;
                foreach ($map['UserAliUids'] as $item1) {
                    $model->userAliUids[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
