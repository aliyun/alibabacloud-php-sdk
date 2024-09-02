<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppGroupCredentialsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example app_group_123
     *
     * @var int
     */
    public $appGroupId;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @example generated_token_string
     *
     * @var string
     */
    public $token;

    /**
     * @example api-token
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appGroupId' => 'appGroupId',
        'enabled'    => 'enabled',
        'token'      => 'token',
        'type'       => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGroupId) {
            $res['appGroupId'] = $this->appGroupId;
        }
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appGroupId'])) {
            $model->appGroupId = $map['appGroupId'];
        }
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
