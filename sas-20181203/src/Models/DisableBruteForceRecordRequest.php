<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DisableBruteForceRecordRequest extends Model
{
    /**
     * @description The IP address that you want to specify in the policy.
     *
     * This parameter is required.
     * @example 8.210.XX.XX
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
     * @description The ID of the IP address blocking policy.
     *
     * > You can call the [DescribeBruteForceRecords](~~DescribeBruteForceRecords~~) operation to query the policy ID.
     * @example 114166XX
     *
     * @var int
     */
    public $id;

    /**
     * @description The port number.
     *
     * @var string
     */
    public $port;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The UUID of the server.
     *
     * This parameter is required.
     * @example cbb9aa80-a8d1-443c-9ff0-2c36cd39****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'blockIp'         => 'BlockIp',
        'bound'           => 'Bound',
        'id'              => 'Id',
        'port'            => 'Port',
        'resourceOwnerId' => 'ResourceOwnerId',
        'uuid'            => 'Uuid',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableBruteForceRecordRequest
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
