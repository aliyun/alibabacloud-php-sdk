<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyCustomBlockRecordRequest extends Model
{
    /**
     * @description The IP address that you want to specify in the policy.
     *
     * @example 10.12.XX.XX
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
     * @example out
     *
     * @var string
     */
    public $bound;

    /**
     * @description The expiration time of the policy.
     *
     * @example 1940899881000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The UUIDs of servers.
     *
     * @example 2516fe4f-adb6-45d1-87a7-90ce1213****,30746836-68d0-47f6-8b2d-c93150da****,7c3ac531-077b-46b8-8706-5c8d4e73****
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
     * @return ModifyCustomBlockRecordRequest
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
