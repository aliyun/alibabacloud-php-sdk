<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class UpdateKmsInstanceBindVpcRequest extends Model
{
    /**
     * @description The VPC configuration. The configuration of each VPC contains the following content:
     *
     *   VpcId: the ID of the VPC.
     *   VSwitchId: the vSwitch in the VPC.
     *   RegionID: the ID of the region to which the VPC belongs.
     *   VpcOwnerId: the Alibaba Cloud account to which the VPC belongs.
     *
     * Format: `[{"VpcId":"${VpcId}","VSwitchId":"${VSwitchId}","RegionId":"${RegionId}","VpcOwnerId":${VpcOwnerId}},..]`.
     * @example [{"VpcId":"vpc-bp1go9qvmj78j4f4c****","VSwitchId":"vsw-bp16c5pvvcf0fp5b9****","RegionId":"cn-hangzhou","VpcOwnerId":120708975881****},{"VpcId":"vpc-bp14c07ucxg6h1xjm****","VSwitchId":"vsw-bp1wujtnspi1l3gvu****","RegionId":"cn-hangzhou","VpcOwnerId":119285303511****}]
     *
     * @var string
     */
    public $bindVpcs;

    /**
     * @description The ID of the KMS instance.
     *
     * @example kst-phzz64f722a1buamw0****
     *
     * @var string
     */
    public $kmsInstanceId;
    protected $_name = [
        'bindVpcs'      => 'BindVpcs',
        'kmsInstanceId' => 'KmsInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindVpcs) {
            $res['BindVpcs'] = $this->bindVpcs;
        }
        if (null !== $this->kmsInstanceId) {
            $res['KmsInstanceId'] = $this->kmsInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateKmsInstanceBindVpcRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindVpcs'])) {
            $model->bindVpcs = $map['BindVpcs'];
        }
        if (isset($map['KmsInstanceId'])) {
            $model->kmsInstanceId = $map['KmsInstanceId'];
        }

        return $model;
    }
}
