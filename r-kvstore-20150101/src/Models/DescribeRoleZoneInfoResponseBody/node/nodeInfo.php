<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRoleZoneInfoResponseBody\node;

use AlibabaCloud\Tea\Model;

class nodeInfo extends Model
{
    /**
     * @description The current bandwidth of the node, which consists of the default bandwidth and the increased bandwidth. Unit: MB/s.
     *
     * > *   You can call the [EnableAdditionalBandwidth](https://help.aliyun.com/document_detail/206173.html) operation to specify the increased bandwidth.
     * > *   You can also use this parameter to calculate the increased bandwidth. For example, if the default bandwidth of the node is 96 MB/s and the returned value of this parameter is 100, the increased bandwidth is 4 MB/s.
     * @example 100
     *
     * @var int
     */
    public $currentBandWidth;

    /**
     * @description The minor version of the node.
     *
     * @example redis-5.0_0.3.10
     *
     * @var string
     */
    public $currentMinorVersion;

    /**
     * @description The ID of the data shard.
     *
     * @example 30381****
     *
     * @var string
     */
    public $custinsId;

    /**
     * @description The default bandwidth of the node. Unit: MB/s.
     *
     * @example 96
     *
     * @var int
     */
    public $defaultBandWidth;

    /**
     * @description The ID of the node.
     *
     * @example r-t4nlenc2p04uvb****
     *
     * @var string
     */
    public $insName;

    /**
     * @description Indicates whether the node is a read replica. If the node is a read replica, **3** is returned.
     *
     * >  If the node is not a read replica, no value is returned.
     * @example 3
     *
     * @var int
     */
    public $insType;

    /**
     * @description Indicates whether the minor version is the latest version. Valid values:
     *
     *   **0**: The minor version is not the latest version.
     *   **1**: The minor version is the latest version.
     *
     * >  To update the minor version, call the [ModifyInstanceMinorVersion](https://help.aliyun.com/document_detail/129381.html) operation.
     * @example 1
     *
     * @var int
     */
    public $isLatestVersion;

    /**
     * @description Indicates whether the bandwidth of the node is increased. Valid values:
     *
     *   **true**: The bandwidth of the node is not increased.
     *   **false**: The bandwidth of the node is increased.
     *
     * @example true
     *
     * @var bool
     */
    public $isOpenBandWidthService;

    /**
     * @description This parameter is used only for internal maintenance of ApsaraDB for Redis instances.
     *
     * @example 10065****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The node type. Valid values:
     *
     *   **db**: data node.
     *   **proxy**: proxy node.
     *   **normal**: regular node. This value is returned when the instance runs in the standard architecture.
     *
     * @example normal
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The role of the node. Valid values:
     *
     *   **master**: master node
     *   **slave**: replica node
     *
     * @example master
     *
     * @var string
     */
    public $role;

    /**
     * @description The ID of the zone.
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
