<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRoleZoneInfoResponseBody\node;

use AlibabaCloud\Tea\Model;

class nodeInfo extends Model
{
    /**
     * @description The number of the returned page.
     *
     * @example 100
     *
     * @var int
     */
    public $currentBandWidth;

    /**
     * @description The number of entries to return on each page. Valid values: **10**, **20**, and **50**. Default value: **10**.
     *
     * @example redis-5.0_0.3.10
     *
     * @var string
     */
    public $currentMinorVersion;

    /**
     * @example 30381****
     *
     * @var string
     */
    public $custinsId;

    /**
     * @description The node type. Valid values:
     *
     *   **db**: data node.
     *   **proxy**: proxy node.
     *   **normal**: regular node. This value is returned when the instance runs in the standard architecture.
     *
     * @example 96
     *
     * @var int
     */
    public $defaultBandWidth;

    /**
     * @description Indicates whether the minor version is the latest version. Valid values:
     *
     *   **0**: The minor version is not the latest version.
     *   **1**: The minor version is the latest version.
     *
     * >  To update the minor version, call the [ModifyInstanceMinorVersion](~~129381~~) operation.
     * @example r-t4nlenc2p04uvb****
     *
     * @var string
     */
    public $insName;

    /**
     * @description Details about each node in an ApsaraDB for Redis instance.
     *
     * @example 3
     *
     * @var int
     */
    public $insType;

    /**
     * @description The number of entries returned per page.
     *
     * @example 1
     *
     * @var int
     */
    public $isLatestVersion;

    /**
     * @description DescribeRoleZoneInfo
     *
     * @example true
     *
     * @var bool
     */
    public $isOpenBandWidthService;

    /**
     * @example 10065****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The ID of the request.
     *
     * @example normal
     *
     * @var string
     */
    public $nodeType;

    /**
     * @example master
     *
     * @var string
     */
    public $role;

    /**
     * @description Queries information about the type, minor version, and bandwidth of specific nodes in an ApsaraDB for Redis instance, and zones where the nodes are deployed.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'currentBandWidth'       => 'CurrentBandWidth',
        'currentMinorVersion'    => 'CurrentMinorVersion',
        'custinsId'              => 'CustinsId',
        'defaultBandWidth'       => 'DefaultBandWidth',
        'insName'                => 'InsName',
        'insType'                => 'InsType',
        'isLatestVersion'        => 'IsLatestVersion',
        'isOpenBandWidthService' => 'IsOpenBandWidthService',
        'nodeId'                 => 'NodeId',
        'nodeType'               => 'NodeType',
        'role'                   => 'Role',
        'zoneId'                 => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentBandWidth) {
            $res['CurrentBandWidth'] = $this->currentBandWidth;
        }
        if (null !== $this->currentMinorVersion) {
            $res['CurrentMinorVersion'] = $this->currentMinorVersion;
        }
        if (null !== $this->custinsId) {
            $res['CustinsId'] = $this->custinsId;
        }
        if (null !== $this->defaultBandWidth) {
            $res['DefaultBandWidth'] = $this->defaultBandWidth;
        }
        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
        }
        if (null !== $this->insType) {
            $res['InsType'] = $this->insType;
        }
        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }
        if (null !== $this->isOpenBandWidthService) {
            $res['IsOpenBandWidthService'] = $this->isOpenBandWidthService;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentBandWidth'])) {
            $model->currentBandWidth = $map['CurrentBandWidth'];
        }
        if (isset($map['CurrentMinorVersion'])) {
            $model->currentMinorVersion = $map['CurrentMinorVersion'];
        }
        if (isset($map['CustinsId'])) {
            $model->custinsId = $map['CustinsId'];
        }
        if (isset($map['DefaultBandWidth'])) {
            $model->defaultBandWidth = $map['DefaultBandWidth'];
        }
        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }
        if (isset($map['InsType'])) {
            $model->insType = $map['InsType'];
        }
        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }
        if (isset($map['IsOpenBandWidthService'])) {
            $model->isOpenBandWidthService = $map['IsOpenBandWidthService'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
