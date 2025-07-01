<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeProtocolMountTargetResponseBody;

use AlibabaCloud\Dara\Model;

class protocolMountTargets extends Model
{
    /**
     * @var string
     */
    public $accessGroupName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $exportId;

    /**
     * @var string
     */
    public $fsetId;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $protocolMountTargetDomain;

    /**
     * @var string
     */
    public $protocolServiceId;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accessGroupName' => 'AccessGroupName',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'exportId' => 'ExportId',
        'fsetId' => 'FsetId',
        'path' => 'Path',
        'protocolMountTargetDomain' => 'ProtocolMountTargetDomain',
        'protocolServiceId' => 'ProtocolServiceId',
        'protocolType' => 'ProtocolType',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->exportId) {
            $res['ExportId'] = $this->exportId;
        }

        if (null !== $this->fsetId) {
            $res['FsetId'] = $this->fsetId;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->protocolMountTargetDomain) {
            $res['ProtocolMountTargetDomain'] = $this->protocolMountTargetDomain;
        }

        if (null !== $this->protocolServiceId) {
            $res['ProtocolServiceId'] = $this->protocolServiceId;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExportId'])) {
            $model->exportId = $map['ExportId'];
        }

        if (isset($map['FsetId'])) {
            $model->fsetId = $map['FsetId'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['ProtocolMountTargetDomain'])) {
            $model->protocolMountTargetDomain = $map['ProtocolMountTargetDomain'];
        }

        if (isset($map['ProtocolServiceId'])) {
            $model->protocolServiceId = $map['ProtocolServiceId'];
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
