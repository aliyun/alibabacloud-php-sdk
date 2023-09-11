<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class UpdateKmsInstanceBindVpcRequest extends Model
{
    /**
     * @example [{"VpcId":"vpc-bp1go9qvmj78j4f4c****","VSwitchId":"vsw-bp16c5pvvcf0fp5b9****","RegionId":"cn-hangzhou","VpcOwnerId":120708975881****},{"VpcId":"vpc-bp14c07ucxg6h1xjm****","VSwitchId":"vsw-bp1wujtnspi1l3gvu****","RegionId":"cn-hangzhou","VpcOwnerId":119285303511****}]
     *
     * @var string
     */
    public $bindVpcs;

    /**
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
