<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\ListSwitchesResponseBody;

use AlibabaCloud\Tea\Model;

class switches extends Model
{
    /**
     * @description 网段
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 交换机id
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description 交换机名称
     *
     * @var string
     */
    public $vSwitchName;

    /**
     * @description 所属VPCid
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'cidrBlock'   => 'CidrBlock',
        'description' => 'Description',
        'vSwitchId'   => 'VSwitchId',
        'vSwitchName' => 'VSwitchName',
        'vpcId'       => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return switches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
