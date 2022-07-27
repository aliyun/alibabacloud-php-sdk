<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DeleteStateConfigurationsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $regionId;

    /**
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
