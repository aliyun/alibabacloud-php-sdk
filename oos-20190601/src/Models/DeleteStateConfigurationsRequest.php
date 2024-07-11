<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DeleteStateConfigurationsRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example abcde3OARpx77No54nv6
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of desired-state configurations.
     *
     * This parameter is required.
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
