<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\ListVpcsResponseBody;

use AlibabaCloud\Tea\Model;

class vpcs extends Model
{
    /**
     * @description vpc的id
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description VPC的名称。
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'vpcId'   => 'VpcId',
        'vpcName' => 'VpcName',
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
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
