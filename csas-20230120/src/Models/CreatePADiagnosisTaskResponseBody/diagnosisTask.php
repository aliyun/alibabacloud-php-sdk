<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreatePADiagnosisTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePADiagnosisTaskResponseBody\diagnosisTask\udpExtraConfigs;
use AlibabaCloud\SDK\Csas\V20230120\Models\CreatePADiagnosisTaskResponseBody\diagnosisTask\userGroup;

class diagnosisTask extends Model
{
    /**
     * @var string
     */
    public $devTag;

    /**
     * @var string
     */
    public $diagnoseId;

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
     * @var string
     */
    public $status;

    /**
     * @var udpExtraConfigs
     */
    public $udpExtraConfigs;

    /**
     * @var userGroup
     */
    public $userGroup;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'devTag' => 'DevTag',
        'diagnoseId' => 'DiagnoseId',
        'diagnoseType' => 'DiagnoseType',
        'host' => 'Host',
        'popId' => 'PopId',
        'popMode' => 'PopMode',
        'port' => 'Port',
        'protocol' => 'Protocol',
        'status' => 'Status',
        'udpExtraConfigs' => 'UdpExtraConfigs',
        'userGroup' => 'UserGroup',
        'username' => 'Username',
    ];

    public function validate()
    {
        if (null !== $this->udpExtraConfigs) {
            $this->udpExtraConfigs->validate();
        }
        if (null !== $this->userGroup) {
            $this->userGroup->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devTag) {
            $res['DevTag'] = $this->devTag;
        }

        if (null !== $this->diagnoseId) {
            $res['DiagnoseId'] = $this->diagnoseId;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->udpExtraConfigs) {
            $res['UdpExtraConfigs'] = null !== $this->udpExtraConfigs ? $this->udpExtraConfigs->toArray($noStream) : $this->udpExtraConfigs;
        }

        if (null !== $this->userGroup) {
            $res['UserGroup'] = null !== $this->userGroup ? $this->userGroup->toArray($noStream) : $this->userGroup;
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

        if (isset($map['DiagnoseId'])) {
            $model->diagnoseId = $map['DiagnoseId'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UdpExtraConfigs'])) {
            $model->udpExtraConfigs = udpExtraConfigs::fromMap($map['UdpExtraConfigs']);
        }

        if (isset($map['UserGroup'])) {
            $model->userGroup = userGroup::fromMap($map['UserGroup']);
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
