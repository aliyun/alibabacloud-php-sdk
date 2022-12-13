<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class UpdateIntegrationConfigRequest extends Model
{
    /**
     * @description accessKey
     *
     * @example 601FA6A2-AC5C-4B59-BE11-378F887A6A11
     *
     * @var string
     */
    public $accessKey;

    /**
     * @example 601FA6A2-AC5C-4B59-BE11-378F987A6A98
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 103
     *
     * @var int
     */
    public $integrationConfigId;
    protected $_name = [
        'accessKey'           => 'accessKey',
        'clientToken'         => 'clientToken',
        'integrationConfigId' => 'integrationConfigId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['accessKey'] = $this->accessKey;
        }
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
     * @return UpdateIntegrationConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessKey'])) {
            $model->accessKey = $map['accessKey'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['integrationConfigId'])) {
            $model->integrationConfigId = $map['integrationConfigId'];
        }

        return $model;
    }
}
