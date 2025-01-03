<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\resource;

use AlibabaCloud\Tea\Model;

class userAccessParam extends Model
{
    /**
     * @example dev
     *
     * @var string
     */
    public $accessId;

    /**
     * @example test
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description endpoint
     *
     * @example test
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example 123434542498
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessId'    => 'AccessId',
        'accessKey'   => 'AccessKey',
        'endpoint'    => 'Endpoint',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['AccessId'] = $this->accessId;
        }
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userAccessParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessId'])) {
            $model->accessId = $map['AccessId'];
        }
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
