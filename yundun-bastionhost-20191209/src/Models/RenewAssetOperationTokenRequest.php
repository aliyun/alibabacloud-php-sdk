<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class RenewAssetOperationTokenRequest extends Model
{
    /**
     * @description The bastion host ID.
     *
     * This parameter is required.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the bastion host.
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](https://help.aliyun.com/document_detail/40654.html).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the O\\&M token that you want to renew.
     *
     * >  You can call the [GenerateAssetOperationToken](https://help.aliyun.com/document_detail/2758861.html) operation to query the O\\&M token ID.
     * @example NmYyMmEzNmMwYzljNGYxMjh******
     *
     * @var string
     */
    public $tokenId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
        'tokenId'    => 'TokenId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tokenId) {
            $res['TokenId'] = $this->tokenId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewAssetOperationTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TokenId'])) {
            $model->tokenId = $map['TokenId'];
        }

        return $model;
    }
}
