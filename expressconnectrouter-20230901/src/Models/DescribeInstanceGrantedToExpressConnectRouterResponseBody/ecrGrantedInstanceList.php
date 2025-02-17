<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeInstanceGrantedToExpressConnectRouterResponseBody;

use AlibabaCloud\Dara\Model;

class ecrGrantedInstanceList extends Model
{
    /**
     * @var string
     */
    public $ecrId;
    /**
     * @var string
     */
    public $ecrOwnerAliUid;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var string
     */
    public $grantId;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var string
     */
    public $nodeOwnerBid;
    /**
     * @var int
     */
    public $nodeOwnerUid;
    /**
     * @var string
     */
    public $nodeRegionId;
    /**
     * @var string
     */
    public $nodeType;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'ecrId'          => 'EcrId',
        'ecrOwnerAliUid' => 'EcrOwnerAliUid',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
        'grantId'        => 'GrantId',
        'nodeId'         => 'NodeId',
        'nodeOwnerBid'   => 'NodeOwnerBid',
        'nodeOwnerUid'   => 'NodeOwnerUid',
        'nodeRegionId'   => 'NodeRegionId',
        'nodeType'       => 'NodeType',
        'status'         => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
