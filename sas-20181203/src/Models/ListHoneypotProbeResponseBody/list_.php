<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotProbeResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotProbeResponseBody\list_\controlNode;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var controlNode
     */
    public $controlNode;

    /**
     * @var int
     */
    public $deployTime;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $hostIp;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $probeId;

    /**
     * @var string
     */
    public $probeType;

    /**
     * @var string
     */
    public $probeVersion;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'controlNode'  => 'ControlNode',
        'deployTime'   => 'DeployTime',
        'displayName'  => 'DisplayName',
        'hostIp'       => 'HostIp',
        'osType'       => 'OsType',
        'probeId'      => 'ProbeId',
        'probeType'    => 'ProbeType',
        'probeVersion' => 'ProbeVersion',
        'status'       => 'Status',
        'uuid'         => 'Uuid',
        'vpcId'        => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlNode) {
            $res['ControlNode'] = null !== $this->controlNode ? $this->controlNode->toMap() : null;
        }
        if (null !== $this->deployTime) {
            $res['DeployTime'] = $this->deployTime;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->hostIp) {
            $res['HostIp'] = $this->hostIp;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->probeId) {
            $res['ProbeId'] = $this->probeId;
        }
        if (null !== $this->probeType) {
            $res['ProbeType'] = $this->probeType;
        }
        if (null !== $this->probeVersion) {
            $res['ProbeVersion'] = $this->probeVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlNode'])) {
            $model->controlNode = controlNode::fromMap($map['ControlNode']);
        }
        if (isset($map['DeployTime'])) {
            $model->deployTime = $map['DeployTime'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['HostIp'])) {
            $model->hostIp = $map['HostIp'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['ProbeId'])) {
            $model->probeId = $map['ProbeId'];
        }
        if (isset($map['ProbeType'])) {
            $model->probeType = $map['ProbeType'];
        }
        if (isset($map['ProbeVersion'])) {
            $model->probeVersion = $map['ProbeVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
