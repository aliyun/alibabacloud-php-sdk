<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponseBody\vpcInfos\vpcInfo\vswitchInfos;

use AlibabaCloud\Tea\Model;

class vswitchInfo extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var bool
     */
    public $drdsSupported;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $azoneId;

    /**
     * @var string
     */
    public $vswitchName;
    protected $_name = [
        'vpcId'         => 'VpcId',
        'drdsSupported' => 'DrdsSupported',
        'vswitchId'     => 'VswitchId',
        'azoneId'       => 'AzoneId',
        'vswitchName'   => 'VswitchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->drdsSupported) {
            $res['DrdsSupported'] = $this->drdsSupported;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->azoneId) {
            $res['AzoneId'] = $this->azoneId;
        }
        if (null !== $this->vswitchName) {
            $res['VswitchName'] = $this->vswitchName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vswitchInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['DrdsSupported'])) {
            $model->drdsSupported = $map['DrdsSupported'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['AzoneId'])) {
            $model->azoneId = $map['AzoneId'];
        }
        if (isset($map['VswitchName'])) {
            $model->vswitchName = $map['VswitchName'];
        }

        return $model;
    }
}
