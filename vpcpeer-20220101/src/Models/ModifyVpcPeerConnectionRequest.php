<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcPeer\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpcPeerConnectionRequest extends Model
{
    /**
     * @description The new bandwidth of the VPC peering connection. Unit: Mbit/s. The value must be an integer greater than 0.
     *
     * @example 100
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system uses **RequestId** as **ClientToken**. **RequestId** may be different for each API request.
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe637760
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The new description of the VPC peering connection.
     *
     * The description must be 1 to 256 characters in length, and cannot start with `http://` or `https://`.
     * @example newdescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to only precheck the request. Valid values:
     *
     *   **true**: checks the request without performing the operation. The system prechecks the required parameters, request syntax, and limits. If the request fails the precheck, an error message is returned. If the request passes the check, the `DryRunOperation` error code is returned.
     *   **false** (default): sends the request. If the request passes the precheck, an HTTP 2xx status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the VPC peering connection whose name or description you want to modify.
     *
     * @example pcc-lnk0m24khwvtkm****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The new name of the VPC peering connection.
     *
     * The name must be 1 to 128 characters in length, and cannot start with `http://` or `https://`.
     * @example vpcpeername
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'bandwidth'   => 'Bandwidth',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'dryRun'      => 'DryRun',
        'instanceId'  => 'InstanceId',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyVpcPeerConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
