<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ConnectKmsInstanceRequest extends Model
{
    /**
     * @example Aliyun
     *
     * @var string
     */
    public $KMProvider;

    /**
     * @example kst-phzz64f722a1buamw0****
     *
     * @var string
     */
    public $kmsInstanceId;

    /**
     * @example vsw-bp1i512amda6d10a0****
     *
     * @var string
     */
    public $vSwitchIds;

    /**
     * @example vpc-bp19z7cwmltad5dff****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-hangzhou-k,cn-hangzhou-j
     *
     * @var string
     */
    public $zoneIds;
    protected $_name = [
        'KMProvider'    => 'KMProvider',
        'kmsInstanceId' => 'KmsInstanceId',
        'vSwitchIds'    => 'VSwitchIds',
        'vpcId'         => 'VpcId',
        'zoneIds'       => 'ZoneIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->KMProvider) {
            $res['KMProvider'] = $this->KMProvider;
        }
        if (null !== $this->kmsInstanceId) {
            $res['KmsInstanceId'] = $this->kmsInstanceId;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneIds) {
            $res['ZoneIds'] = $this->zoneIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConnectKmsInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KMProvider'])) {
            $model->KMProvider = $map['KMProvider'];
        }
        if (isset($map['KmsInstanceId'])) {
            $model->kmsInstanceId = $map['KmsInstanceId'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = $map['VSwitchIds'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneIds'])) {
            $model->zoneIds = $map['ZoneIds'];
        }

        return $model;
    }
}
