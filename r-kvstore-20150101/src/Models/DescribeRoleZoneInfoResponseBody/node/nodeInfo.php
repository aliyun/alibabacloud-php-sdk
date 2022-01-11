<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRoleZoneInfoResponseBody\node;

use AlibabaCloud\Tea\Model;

class nodeInfo extends Model
{
    /**
     * @var int
     */
    public $currentBandWidth;

    /**
     * @var string
     */
    public $currentMinorVersion;

    /**
     * @var string
     */
    public $custinsId;

    /**
     * @var int
     */
    public $defaultBandWidth;

    /**
     * @var string
     */
    public $insName;

    /**
     * @var int
     */
    public $insType;

    /**
     * @var int
     */
    public $isLatestVersion;

    /**
     * @var bool
     */
    public $isOpenBandWidthService;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $role;

    /**
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
