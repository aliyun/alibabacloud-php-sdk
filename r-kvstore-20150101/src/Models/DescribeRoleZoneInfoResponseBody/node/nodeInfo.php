<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRoleZoneInfoResponseBody\node;

use AlibabaCloud\Tea\Model;

class nodeInfo extends Model
{
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

    /**
     * @var string
     */
    public $custinsId;

    /**
     * @var int
     */
    public $insType;

    /**
     * @var string
     */
    public $insName;

    /**
     * @var int
     */
    public $isLatestVersion;

    /**
     * @var string
     */
    public $currentMinorVersion;

    /**
     * @var int
     */
    public $currentBandWidth;

    /**
     * @var int
     */
    public $defaultBandWidth;

    /**
     * @var bool
     */
    public $isOpenBandWidthService;
    protected $_name = [
        'nodeId'                 => 'NodeId',
        'nodeType'               => 'NodeType',
        'role'                   => 'Role',
        'zoneId'                 => 'ZoneId',
        'custinsId'              => 'CustinsId',
        'insType'                => 'InsType',
        'insName'                => 'InsName',
        'isLatestVersion'        => 'IsLatestVersion',
        'currentMinorVersion'    => 'CurrentMinorVersion',
        'currentBandWidth'       => 'CurrentBandWidth',
        'defaultBandWidth'       => 'DefaultBandWidth',
        'isOpenBandWidthService' => 'IsOpenBandWidthService',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->custinsId) {
            $res['CustinsId'] = $this->custinsId;
        }
        if (null !== $this->insType) {
            $res['InsType'] = $this->insType;
        }
        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
        }
        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }
        if (null !== $this->currentMinorVersion) {
            $res['CurrentMinorVersion'] = $this->currentMinorVersion;
        }
        if (null !== $this->currentBandWidth) {
            $res['CurrentBandWidth'] = $this->currentBandWidth;
        }
        if (null !== $this->defaultBandWidth) {
            $res['DefaultBandWidth'] = $this->defaultBandWidth;
        }
        if (null !== $this->isOpenBandWidthService) {
            $res['IsOpenBandWidthService'] = $this->isOpenBandWidthService;
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
        if (isset($map['CustinsId'])) {
            $model->custinsId = $map['CustinsId'];
        }
        if (isset($map['InsType'])) {
            $model->insType = $map['InsType'];
        }
        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }
        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }
        if (isset($map['CurrentMinorVersion'])) {
            $model->currentMinorVersion = $map['CurrentMinorVersion'];
        }
        if (isset($map['CurrentBandWidth'])) {
            $model->currentBandWidth = $map['CurrentBandWidth'];
        }
        if (isset($map['DefaultBandWidth'])) {
            $model->defaultBandWidth = $map['DefaultBandWidth'];
        }
        if (isset($map['IsOpenBandWidthService'])) {
            $model->isOpenBandWidthService = $map['IsOpenBandWidthService'];
        }

        return $model;
    }
}
