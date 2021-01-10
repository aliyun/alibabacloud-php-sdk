<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class SaveAppAuthTokenRequest extends Model
{
    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var string
     */
    public $isvAppId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appAuthToken;
    protected $_name = [
        'spaceId'      => 'SpaceId',
        'isvAppId'     => 'IsvAppId',
        'appId'        => 'AppId',
        'appAuthToken' => 'AppAuthToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->isvAppId) {
            $res['IsvAppId'] = $this->isvAppId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appAuthToken) {
            $res['AppAuthToken'] = $this->appAuthToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveAppAuthTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['IsvAppId'])) {
            $model->isvAppId = $map['IsvAppId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppAuthToken'])) {
            $model->appAuthToken = $map['AppAuthToken'];
        }

        return $model;
    }
}
