<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\CreateWirelessCloudConnectorRequest;

use AlibabaCloud\Tea\Model;

class netLinks extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example zjalyjs01s.5gjs.njiot
     *
     * @var string
     */
    public $APN;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $vSwitchs;

    /**
     * @description This parameter is required.
     *
     * @example vpc-xxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'APN'      => 'APN',
        'regionId' => 'RegionId',
        'vSwitchs' => 'VSwitchs',
        'vpcId'    => 'VpcId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
