<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeInstanceGrantedToExpressConnectRouterResponseBody;

use AlibabaCloud\Tea\Model;

class ecrGrantedInstanceList extends Model
{
    /**
     * @description The ECR ID.
     *
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @description The ID of the Alibaba Cloud account that owns the ECR to which you want to grant permissions.
     *
     * @example 1456408190545060
     *
     * @var string
     */
    public $ecrOwnerAliUid;

    /**
     * @description The time when the network instance was created.
     *
     * @example 1669023139000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the network instance was modified.
     *
     * @example 1669023139000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The authorization ID.
     *
     * @example gr-8gdelo13mi99g1****
     *
     * @var string
     */
    public $grantId;

    /**
     * @description The ID of the network instance.
     *
     * @example vbr-j6cwxhgg0s5nuephp****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The ID of the Alibaba Cloud enterprise account that owns the network instance.
     *
     * @example 26842
     *
     * @var string
     */
    public $nodeOwnerBid;

    /**
     * @description The ID of the Alibaba Cloud account that owns the network instance.
     *
     * @example 129845258050****
     *
     * @var int
     */
    public $nodeOwnerUid;

    /**
     * @description The region ID of the network instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $nodeRegionId;

    /**
     * @description The type of the network instance. Valid values:
     *
     *   **VBR**
     *   **VPC**
     *
     * @example VBR
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The state of the network instance.
     *
     * @example Active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'ecrId' => 'EcrId',
        'ecrOwnerAliUid' => 'EcrOwnerAliUid',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'grantId' => 'GrantId',
        'nodeId' => 'NodeId',
        'nodeOwnerBid' => 'NodeOwnerBid',
        'nodeOwnerUid' => 'NodeOwnerUid',
        'nodeRegionId' => 'NodeRegionId',
        'nodeType' => 'NodeType',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
        }
        if (null !== $this->ecrOwnerAliUid) {
            $res['EcrOwnerAliUid'] = $this->ecrOwnerAliUid;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->grantId) {
            $res['GrantId'] = $this->grantId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeOwnerBid) {
            $res['NodeOwnerBid'] = $this->nodeOwnerBid;
        }
        if (null !== $this->nodeOwnerUid) {
            $res['NodeOwnerUid'] = $this->nodeOwnerUid;
        }
        if (null !== $this->nodeRegionId) {
            $res['NodeRegionId'] = $this->nodeRegionId;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecrGrantedInstanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcrId'])) {
            $model->ecrId = $map['EcrId'];
        }
        if (isset($map['EcrOwnerAliUid'])) {
            $model->ecrOwnerAliUid = $map['EcrOwnerAliUid'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GrantId'])) {
            $model->grantId = $map['GrantId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeOwnerBid'])) {
            $model->nodeOwnerBid = $map['NodeOwnerBid'];
        }
        if (isset($map['NodeOwnerUid'])) {
            $model->nodeOwnerUid = $map['NodeOwnerUid'];
        }
        if (isset($map['NodeRegionId'])) {
            $model->nodeRegionId = $map['NodeRegionId'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
