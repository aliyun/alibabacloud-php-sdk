<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchesResponseBody\vSwitches;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchesResponseBody\vSwitches\vSwitch\tags;

class vSwitch extends Model
{
    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var int
     */
    public $freeIpCount;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vSwitchName;
    protected $_name = [
        'cidrBlock' => 'CidrBlock',
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'freeIpCount' => 'FreeIpCount',
        'networkId' => 'NetworkId',
        'status' => 'Status',
        'tags' => 'Tags',
        'vSwitchId' => 'VSwitchId',
        'vSwitchName' => 'VSwitchName',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->freeIpCount) {
            $res['FreeIpCount'] = $this->freeIpCount;
        }

        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
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
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['FreeIpCount'])) {
            $model->freeIpCount = $map['FreeIpCount'];
        }

        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }

        return $model;
    }
}
