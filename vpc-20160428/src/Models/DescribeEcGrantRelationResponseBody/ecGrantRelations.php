<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEcGrantRelationResponseBody;

use AlibabaCloud\Dara\Model;

class ecGrantRelations extends Model
{
    /**
     * @var int
     */
    public $aliUid;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $grantType;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $instanceName;
    /**
     * @var string
     */
    public $instanceRouterId;
    /**
     * @var string
     */
    public $regionNo;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $vbrInstanceId;
    /**
     * @var int
     */
    public $vbrOwnerUid;
    /**
     * @var string
     */
    public $vbrRegionNo;
    protected $_name = [
        'aliUid'           => 'AliUid',
        'gmtCreate'        => 'GmtCreate',
        'grantType'        => 'GrantType',
        'instanceId'       => 'InstanceId',
        'instanceName'     => 'InstanceName',
        'instanceRouterId' => 'InstanceRouterId',
        'regionNo'         => 'RegionNo',
        'status'           => 'Status',
        'vbrInstanceId'    => 'VbrInstanceId',
        'vbrOwnerUid'      => 'VbrOwnerUid',
        'vbrRegionNo'      => 'VbrRegionNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->grantType) {
            $res['GrantType'] = $this->grantType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceRouterId) {
            $res['InstanceRouterId'] = $this->instanceRouterId;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vbrInstanceId) {
            $res['VbrInstanceId'] = $this->vbrInstanceId;
        }

        if (null !== $this->vbrOwnerUid) {
            $res['VbrOwnerUid'] = $this->vbrOwnerUid;
        }

        if (null !== $this->vbrRegionNo) {
            $res['VbrRegionNo'] = $this->vbrRegionNo;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GrantType'])) {
            $model->grantType = $map['GrantType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceRouterId'])) {
            $model->instanceRouterId = $map['InstanceRouterId'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VbrInstanceId'])) {
            $model->vbrInstanceId = $map['VbrInstanceId'];
        }

        if (isset($map['VbrOwnerUid'])) {
            $model->vbrOwnerUid = $map['VbrOwnerUid'];
        }

        if (isset($map['VbrRegionNo'])) {
            $model->vbrRegionNo = $map['VbrRegionNo'];
        }

        return $model;
    }
}
