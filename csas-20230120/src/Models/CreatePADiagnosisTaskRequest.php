<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePADiagnosisTaskRequest\udpExtraConfigs;

class CreatePADiagnosisTaskRequest extends Model
{
    /**
     * @var string
     */
    public $devTag;

    /**
     * @var string
     */
    public $diagnoseType;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $popId;

    /**
     * @var string
     */
    public $popMode;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var udpExtraConfigs
     */
    public $udpExtraConfigs;

    /**
     * @var string
     */
    public $userGroupId;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'devTag' => 'DevTag',
        'diagnoseType' => 'DiagnoseType',
        'host' => 'Host',
        'popId' => 'PopId',
        'popMode' => 'PopMode',
        'port' => 'Port',
        'protocol' => 'Protocol',
        'udpExtraConfigs' => 'UdpExtraConfigs',
        'userGroupId' => 'UserGroupId',
        'username' => 'Username',
    ];

    public function validate()
    {
        if (null !== $this->udpExtraConfigs) {
            $this->udpExtraConfigs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devTag) {
            $res['DevTag'] = $this->devTag;
        }

        if (null !== $this->diagnoseType) {
            $res['DiagnoseType'] = $this->diagnoseType;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->popId) {
            $res['PopId'] = $this->popId;
        }

        if (null !== $this->popMode) {
            $res['PopMode'] = $this->popMode;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->udpExtraConfigs) {
            $res['UdpExtraConfigs'] = null !== $this->udpExtraConfigs ? $this->udpExtraConfigs->toArray($noStream) : $this->udpExtraConfigs;
        }

        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
        if (isset($map['DevTag'])) {
            $model->devTag = $map['DevTag'];
        }

        if (isset($map['DiagnoseType'])) {
            $model->diagnoseType = $map['DiagnoseType'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['PopId'])) {
            $model->popId = $map['PopId'];
        }

        if (isset($map['PopMode'])) {
            $model->popMode = $map['PopMode'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['UdpExtraConfigs'])) {
            $model->udpExtraConfigs = udpExtraConfigs::fromMap($map['UdpExtraConfigs']);
        }

        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
