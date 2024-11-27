<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateAppResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 4a0fae835cd741f3b12376d8a5a8e549v3
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example 10
     *
     * @var int
     */
    public $appGroupId;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'appGroupId'  => 'AppGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->appGroupId) {
            $res['AppGroupId'] = $this->appGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['AppGroupId'])) {
            $model->appGroupId = $map['AppGroupId'];
        }

        return $model;
    }
}
