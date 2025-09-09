<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceSwitchNetworkResponseBody\vpcInfos\vpcInfo\vswitchInfos;

use AlibabaCloud\Dara\Model;

class vswitchInfo extends Model
{
    /**
     * @var string
     */
    public $azoneId;

    /**
     * @var bool
     */
    public $drdsSupported;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $vswitchName;
    protected $_name = [
        'azoneId' => 'AzoneId',
        'drdsSupported' => 'DrdsSupported',
        'vpcId' => 'VpcId',
        'vswitchId' => 'VswitchId',
        'vswitchName' => 'VswitchName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->azoneId) {
            $res['AzoneId'] = $this->azoneId;
        }

        if (null !== $this->drdsSupported) {
            $res['DrdsSupported'] = $this->drdsSupported;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        if (null !== $this->vswitchName) {
            $res['VswitchName'] = $this->vswitchName;
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
        if (isset($map['AzoneId'])) {
            $model->azoneId = $map['AzoneId'];
        }

        if (isset($map['DrdsSupported'])) {
            $model->drdsSupported = $map['DrdsSupported'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        if (isset($map['VswitchName'])) {
            $model->vswitchName = $map['VswitchName'];
        }

        return $model;
    }
}
