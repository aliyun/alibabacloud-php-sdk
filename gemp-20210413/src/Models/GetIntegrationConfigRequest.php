<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class GetIntegrationConfigRequest extends Model
{
    /**
     * @description 幂等id
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 集成配置id
     *
     * @var int
     */
    public $integrationConfigId;
    protected $_name = [
        'clientToken'         => 'clientToken',
        'integrationConfigId' => 'integrationConfigId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->integrationConfigId) {
            $res['integrationConfigId'] = $this->integrationConfigId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIntegrationConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['integrationConfigId'])) {
            $model->integrationConfigId = $map['integrationConfigId'];
        }

        return $model;
    }
}
