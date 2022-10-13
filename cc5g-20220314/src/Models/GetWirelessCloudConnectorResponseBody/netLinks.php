<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\GetWirelessCloudConnectorResponseBody;

use AlibabaCloud\Tea\Model;

class netLinks extends Model
{
    /**
     * @var string
     */
    public $APN;

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
    public $grantAliUid;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $netLinkId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $vSwitchs;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'APN'         => 'APN',
        'createTime'  => 'CreateTime',
        'description' => 'Description',
        'grantAliUid' => 'GrantAliUid',
        'ISP'         => 'ISP',
        'name'        => 'Name',
        'netLinkId'   => 'NetLinkId',
        'regionId'    => 'RegionId',
        'status'      => 'Status',
        'vSwitchs'    => 'VSwitchs',
        'vpcId'       => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->APN) {
            $res['APN'] = $this->APN;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->grantAliUid) {
            $res['GrantAliUid'] = $this->grantAliUid;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->netLinkId) {
            $res['NetLinkId'] = $this->netLinkId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vSwitchs) {
            $res['VSwitchs'] = $this->vSwitchs;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return netLinks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['APN'])) {
            $model->APN = $map['APN'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GrantAliUid'])) {
            $model->grantAliUid = $map['GrantAliUid'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetLinkId'])) {
            $model->netLinkId = $map['NetLinkId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VSwitchs'])) {
            if (!empty($map['VSwitchs'])) {
                $model->vSwitchs = $map['VSwitchs'];
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
