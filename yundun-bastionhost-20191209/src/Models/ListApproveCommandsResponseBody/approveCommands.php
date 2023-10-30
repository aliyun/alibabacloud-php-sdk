<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListApproveCommandsResponseBody;

use AlibabaCloud\Tea\Model;

class approveCommands extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $approveCommandId;

    /**
     * @example root
     *
     * @var string
     */
    public $assetAccountName;

    /**
     * @example 10.167.66.167
     *
     * @var string
     */
    public $assetIp;

    /**
     * @example poros-test
     *
     * @var string
     */
    public $assetName;

    /**
     * @example 172.18.60.68
     *
     * @var string
     */
    public $clientIp;

    /**
     * @example test
     *
     * @var string
     */
    public $clientUser;

    /**
     * @example /bin/bash
     *
     * @var string
     */
    public $command;

    /**
     * @example 1679393152
     *
     * @var string
     */
    public $createTime;

    /**
     * @example SSH
     *
     * @var string
     */
    public $protocolName;

    /**
     * @example 95f873ab64a76d5b0000000000004d5e
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example Wait
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'approveCommandId' => 'ApproveCommandId',
        'assetAccountName' => 'AssetAccountName',
        'assetIp'          => 'AssetIp',
        'assetName'        => 'AssetName',
        'clientIp'         => 'ClientIp',
        'clientUser'       => 'ClientUser',
        'command'          => 'Command',
        'createTime'       => 'CreateTime',
        'protocolName'     => 'ProtocolName',
        'sessionId'        => 'SessionId',
        'state'            => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approveCommandId) {
            $res['ApproveCommandId'] = $this->approveCommandId;
        }
        if (null !== $this->assetAccountName) {
            $res['AssetAccountName'] = $this->assetAccountName;
        }
        if (null !== $this->assetIp) {
            $res['AssetIp'] = $this->assetIp;
        }
        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->clientUser) {
            $res['ClientUser'] = $this->clientUser;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->protocolName) {
            $res['ProtocolName'] = $this->protocolName;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return approveCommands
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApproveCommandId'])) {
            $model->approveCommandId = $map['ApproveCommandId'];
        }
        if (isset($map['AssetAccountName'])) {
            $model->assetAccountName = $map['AssetAccountName'];
        }
        if (isset($map['AssetIp'])) {
            $model->assetIp = $map['AssetIp'];
        }
        if (isset($map['AssetName'])) {
            $model->assetName = $map['AssetName'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['ClientUser'])) {
            $model->clientUser = $map['ClientUser'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
