<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class GrantNetLinkRequest extends Model
{
    /**
     * @example f0ba469f-de7f-4dde-8390-0966a1a0ef9a
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example False
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description This parameter is required.
     *
     * @example 11111111111
     *
     * @var int
     */
    public $grantAliUid;

    /**
     * @description This parameter is required.
     *
     * @example cciot-xxxx
     *
     * @var string
     */
    public $netLinkId;

    /**
     * @description This parameter is required.
     *
     * @example cc5g-xxxx
     *
     * @var string
     */
    public $wirelessCloudConnectorId;
    protected $_name = [
        'clientToken'              => 'ClientToken',
        'dryRun'                   => 'DryRun',
        'grantAliUid'              => 'GrantAliUid',
        'netLinkId'                => 'NetLinkId',
        'wirelessCloudConnectorId' => 'WirelessCloudConnectorId',
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
        if (null !== $this->grantAliUid) {
            $res['GrantAliUid'] = $this->grantAliUid;
        }
        if (null !== $this->netLinkId) {
            $res['NetLinkId'] = $this->netLinkId;
        }
        if (null !== $this->wirelessCloudConnectorId) {
            $res['WirelessCloudConnectorId'] = $this->wirelessCloudConnectorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantNetLinkRequest
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
        if (isset($map['GrantAliUid'])) {
            $model->grantAliUid = $map['GrantAliUid'];
        }
        if (isset($map['NetLinkId'])) {
            $model->netLinkId = $map['NetLinkId'];
        }
        if (isset($map['WirelessCloudConnectorId'])) {
            $model->wirelessCloudConnectorId = $map['WirelessCloudConnectorId'];
        }

        return $model;
    }
}
