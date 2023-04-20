<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class SaveAppAuthTokenRequest extends Model
{
    /**
     * @example 202111BB576ef688a3564875a75a9babd6XXXXXX
     *
     * @var string
     */
    public $appAuthToken;

    /**
     * @example 2021002198669xxx
     *
     * @var string
     */
    public $appId;

    /**
     * @example 2021002110693xxx
     *
     * @var string
     */
    public $isvAppId;

    /**
     * @example 368ef42a-763f-0000-acc2-8aa9564c****
     *
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
