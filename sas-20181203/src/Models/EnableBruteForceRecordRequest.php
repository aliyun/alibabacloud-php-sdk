<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class EnableBruteForceRecordRequest extends Model
{
    /**
     * @description The IP address that is specified in the policy.
     *
     * This parameter is required.
     * @example 61.155.XX.XX
     *
     * @var string
     */
    public $blockIp;

    /**
     * @description The traffic direction that is specified in the policy. Valid values:
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
     * @description The ID of the policy that you want to enable.
     *
     * > You can call the [DescribeBruteForceRecords](~~DescribeBruteForceRecords~~) operation to query the IDs of policies.
     * @example 116602XX
     *
     * @var int
     */
    public $id;

    /**
     * @description The port number.
     *
     * @example 22/22
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
     * @example 71046acb-8bff-4c3b-9163-24deb007****
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
     * @return EnableBruteForceRecordRequest
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
