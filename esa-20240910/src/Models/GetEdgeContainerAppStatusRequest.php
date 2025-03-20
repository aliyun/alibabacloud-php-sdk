<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetEdgeContainerAppStatusRequest extends Model
{
    /**
     * @description The application ID, which can be obtained by calling the [ListEdgeContainerApps](~~ListEdgeContainerApps~~) operation.
     *
     * This parameter is required.
     *
     * @example app-88068867578379****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The release environment. Valid values: prod and staging.
     *
     * @example staging
     *
     * @var string
     */
    public $publishEnv;
    protected $_name = [
        'appId' => 'AppId',
        'publishEnv' => 'PublishEnv',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->publishEnv) {
            $res['PublishEnv'] = $this->publishEnv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEdgeContainerAppStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PublishEnv'])) {
            $model->publishEnv = $map['PublishEnv'];
        }

        return $model;
    }
}
