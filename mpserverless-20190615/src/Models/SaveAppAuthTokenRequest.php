<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class SaveAppAuthTokenRequest extends Model
{
    /**
     * @var string
     */
    public $appAuthToken;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $isvAppId;

    /**
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'appAuthToken' => 'AppAuthToken',
        'appId'        => 'AppId',
        'isvAppId'     => 'IsvAppId',
        'spaceId'      => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appAuthToken) {
            $res['AppAuthToken'] = $this->appAuthToken;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->isvAppId) {
            $res['IsvAppId'] = $this->isvAppId;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
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
        if (isset($map['AppAuthToken'])) {
            $model->appAuthToken = $map['AppAuthToken'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['IsvAppId'])) {
            $model->isvAppId = $map['IsvAppId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
