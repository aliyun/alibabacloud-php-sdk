<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVpcPrefixListResponseBody extends Model
{
    /**
     * @description The ID of the prefix list.
     *
     * @example pl-0b700s2ee3***
     *
     * @var string
     */
    public $prefixListId;

    /**
     * @description The ID of the request.
     *
     * @example 54B48E3D-DF70-471B-AA93-08E683A1B45
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the prefix list belongs.
     *
     * @example rg-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'prefixListId'    => 'PrefixListId',
        'requestId'       => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prefixListId) {
            $res['PrefixListId'] = $this->prefixListId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcPrefixListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrefixListId'])) {
            $model->prefixListId = $map['PrefixListId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
