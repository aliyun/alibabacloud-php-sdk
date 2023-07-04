<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DeleteIpsecServerRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The client token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** may be different for each API request.
     * @example 02fb3da4-130e-11e9-8e44-00****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether only to precheck this request. Valid values:
     *
     *   **true**: only prechecks the request. After the request passes the precheck, the system does not delete the IPsec server. The system checks the required parameters, the request format, and the service limits. If the request fails the precheck, an error code is returned. If the request passes the precheck, the `DryRunOperation` error code is returned.
     *   **false** (default): prechecks the request. After the request passes the precheck, the system deletes the IPsec server.
     *
     * @example false
     *
     * @var string
     */
    public $dryRun;

    /**
     * @description The ID of the IPsec server.
     *
     * @example iss-bp1jougp8cfsbo8y9****
     *
     * @var string
     */
    public $ipsecServerId;

    /**
     * @description The ID of the region where the IPsec server is created.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'   => 'ClientToken',
        'dryRun'        => 'DryRun',
        'ipsecServerId' => 'IpsecServerId',
        'regionId'      => 'RegionId',
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ipsecServerId) {
            $res['IpsecServerId'] = $this->ipsecServerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteIpsecServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IpsecServerId'])) {
            $model->ipsecServerId = $map['IpsecServerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
