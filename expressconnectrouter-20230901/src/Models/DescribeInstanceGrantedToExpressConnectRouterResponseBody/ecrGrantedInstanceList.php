<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeInstanceGrantedToExpressConnectRouterResponseBody;

use AlibabaCloud\Tea\Model;

class ecrGrantedInstanceList extends Model
{
    /**
     * @example ecr-mezk2idmsd0vx2****
     *
     * @var string
     */
    public $ecrId;

    /**
     * @example 1669023139000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1669023139000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example gr-8gdelo13mi99g1****
     *
     * @var string
     */
    public $grantId;

    /**
     * @example vbr-j6cwxhgg0s5nuephp****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example 26842
     *
     * @var string
     */
    public $nodeOwnerBid;

    /**
     * @example 129845258050****
     *
     * @var int
     */
    public $nodeOwnerUid;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $nodeRegionId;

    /**
     * @example VBR
     *
     * @var string
     */
    public $nodeType;

    /**
     * @example Active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'ecrId'        => 'EcrId',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'grantId'      => 'GrantId',
        'nodeId'       => 'NodeId',
        'nodeOwnerBid' => 'NodeOwnerBid',
        'nodeOwnerUid' => 'NodeOwnerUid',
        'nodeRegionId' => 'NodeRegionId',
        'nodeType'     => 'NodeType',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecrId) {
            $res['EcrId'] = $this->ecrId;
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
