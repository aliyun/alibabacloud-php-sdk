<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DeleteStateConfigurationsRequest extends Model
{
    /**
     * @description Deletes desired-state configurations in batches
     *
     * @example abcde3OARpx77No54nv6
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the request.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description ## Debugging
     *
     * [OpenAPI Explorer automatically calculates the signature value. For your convenience, we recommend that you call this operation in OpenAPI Explorer. OpenAPI Explorer dynamically generates the sample code of the operation for different SDKs.](https://api.aliyun.com/#product=oos\&api=DeleteStateConfigurations\&type=RPC\&version=2019-06-01)
     * @example ["sc-asfgdhj12345"]
     *
     * @var string
     */
    public $stateConfigurationIds;
    protected $_name = [
        'clientToken'           => 'ClientToken',
        'regionId'              => 'RegionId',
        'stateConfigurationIds' => 'StateConfigurationIds',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stateConfigurationIds) {
            $res['StateConfigurationIds'] = $this->stateConfigurationIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteStateConfigurationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StateConfigurationIds'])) {
            $model->stateConfigurationIds = $map['StateConfigurationIds'];
        }

        return $model;
    }
}
