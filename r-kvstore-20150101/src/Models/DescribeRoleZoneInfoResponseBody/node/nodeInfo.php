<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRoleZoneInfoResponseBody\node;

use AlibabaCloud\Tea\Model;

class nodeInfo extends Model
{
    /**
     * @var string
     */
    public $currentMinorVersion;

    /**
     * @var int
     */
    public $insType;

    /**
     * @var int
     */
    public $isLatestVersion;

    /**
     * @var string
     */
    public $insName;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $custinsId;

    /**
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'currentMinorVersion' => 'CurrentMinorVersion',
        'insType'             => 'InsType',
        'isLatestVersion'     => 'IsLatestVersion',
        'insName'             => 'InsName',
        'nodeType'            => 'NodeType',
        'zoneId'              => 'ZoneId',
        'role'                => 'Role',
        'custinsId'           => 'CustinsId',
        'nodeId'              => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentMinorVersion) {
            $res['CurrentMinorVersion'] = $this->currentMinorVersion;
        }
        if (null !== $this->insType) {
            $res['InsType'] = $this->insType;
        }
        if (null !== $this->isLatestVersion) {
            $res['IsLatestVersion'] = $this->isLatestVersion;
        }
        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->custinsId) {
            $res['CustinsId'] = $this->custinsId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['CurrentMinorVersion'])) {
            $model->currentMinorVersion = $map['CurrentMinorVersion'];
        }
        if (isset($map['InsType'])) {
            $model->insType = $map['InsType'];
        }
        if (isset($map['IsLatestVersion'])) {
            $model->isLatestVersion = $map['IsLatestVersion'];
        }
        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['CustinsId'])) {
            $model->custinsId = $map['CustinsId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
