<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotProbeResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotProbeResponseBody\list_\controlNode;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The information about the management node.
     *
     * @var controlNode
     */
    public $controlNode;

    /**
     * @description The time when the probe was deployed.
     *
     * @example 1669363825000
     *
     * @var int
     */
    public $deployTime;

    /**
     * @description The name of the probe.
     *
     * @example prod-pinpoint-hd1b
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The IP address of the server on which the probe is installed.
     *
     * @example 33.53.XX.XX
     *
     * @var string
     */
    public $hostIp;

    /**
     * @description The operating system of the server on which the probe is deployed. Valid values:
     *
     *   windows
     *   linux
     *
     * @example windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The ID of the probe.
     *
     * @example 4d167bb3-dd09-4a6a-a179-d5d6a5b0****
     *
     * @var string
     */
    public $probeId;

    /**
     * @description The type of the probe. Valid values:
     *
     *   **host_probe**: host probe
     *   **vpc_black_hole_probe**: VPC probe
     *
     * @example host_probe
     *
     * @var string
     */
    public $probeType;

    /**
     * @description The version of the probe.
     *
     * @example 18060096
     *
     * @var string
     */
    public $probeVersion;

    /**
     * @description The status of the probe. Valid values:
     *
     *   **installed**: installed
     *   **install_failed**: installation failed
     *   **online**: online
     *   **offline**: offline
     *   **unnormal**: abnormal
     *   **unprobe**: unauthorized
     *   **uninstalling**: being uninstalled
     *   **uninstalled**: uninstalled
     *   **uninstall_failed**: uninstallation failed
     *   **not_exist**: not installed
     *
     * @example online
     *
     * @var string
     */
    public $status;

    /**
     * @description The UUID of the server to which the host probe is deployed.
     *
     * @example 49e25e0f-bb51-4a5a-a1b3-13a4ddaa****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The ID of the VPC in which the VPC probe is deployed.
     *
     * @example vpc-5gu8iu68w9b472jbb****
     *
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
