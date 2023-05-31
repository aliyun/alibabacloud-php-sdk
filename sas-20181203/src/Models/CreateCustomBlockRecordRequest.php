<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomBlockRecordRequest extends Model
{
    /**
     * @description The IP address that you want to specify in the policy.
     *
     * @example 192.168.xx.xx
     *
     * @var string
     */
    public $blockIp;

    /**
     * @description The traffic direction that you want to specify in the policy. Valid values:
     *
     *   **in**: inbound
     *   **out**: outbound
     *
     * @example in
     *
     * @var string
     */
    public $bound;

    /**
     * @description The expiration time of the policy.
     *
     * @example 1859094550000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The UUIDs of the servers. Separate multiple UUIDs with commas (,).
     *
     * @example 71c846d6-5c84-4714-acfc-58265bc3****,5013b5e8-1613-43a8-b4de-651db318****,df53f0ad-b3ba-4fe0-9ec7-f42a2ae2****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'blockIp'         => 'BlockIp',
        'bound'           => 'Bound',
        'expireTime'      => 'ExpireTime',
        'resourceOwnerId' => 'ResourceOwnerId',
        'uuids'           => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockIp) {
            $res['BlockIp'] = $this->blockIp;
        }
        if (null !== $this->bound) {
            $res['Bound'] = $this->bound;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomBlockRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockIp'])) {
            $model->blockIp = $map['BlockIp'];
        }
        if (isset($map['Bound'])) {
            $model->bound = $map['Bound'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
