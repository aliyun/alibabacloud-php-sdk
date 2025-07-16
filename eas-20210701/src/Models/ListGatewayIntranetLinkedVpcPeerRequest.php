<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class ListGatewayIntranetLinkedVpcPeerRequest extends Model
{
    /**
     * @description The ID of the associated VPC. To obtain the VPC ID, see [ListGatewayIntranetLinkedVpc](https://help.aliyun.com/document_detail/2621223.html).
     *
     *   If you specify a VPC ID, only VPC peers corresponding to the ID are queried.
     *   Otherwise, all VPC peers are queried.
     *
     * @example vpc-2zetuli9ws0qgjd******
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGatewayIntranetLinkedVpcPeerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
