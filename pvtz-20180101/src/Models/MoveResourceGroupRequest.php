<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class MoveResourceGroupRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 21079fa016944979537637959d09bc
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The language of the values for specific response parameters. Default value: en. Valid values: en, zh, and ja.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the resource group.
     *
     * This parameter is required.
     * @example rg-aekzzk7hx3glaoq
     *
     * @var string
     */
    public $newResourceGroupId;

    /**
     * @description The global ID of the zone.
     *
     * This parameter is required.
     * @example AgIDE1MA_149
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'clientToken'        => 'ClientToken',
        'lang'               => 'Lang',
        'newResourceGroupId' => 'NewResourceGroupId',
        'resourceId'         => 'ResourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->newResourceGroupId) {
            $res['NewResourceGroupId'] = $this->newResourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MoveResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NewResourceGroupId'])) {
            $model->newResourceGroupId = $map['NewResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
