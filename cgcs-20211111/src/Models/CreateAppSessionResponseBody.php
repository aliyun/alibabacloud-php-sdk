<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class CreateAppSessionResponseBody extends Model
{
    /**
     * @example 13027XXXX
     *
     * @var string
     */
    public $appId;

    /**
     * @example 35067XXXX
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example 1ADE0XXXX
     *
     * @var string
     */
    public $customSessionId;

    /**
     * @example 100XXXX
     *
     * @var string
     */
    public $platformSessionId;

    /**
     * @example 46329898-489C-4E63-9BA1-C1DA5C5D0986
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appId'             => 'AppId',
        'appVersion'        => 'AppVersion',
        'customSessionId'   => 'CustomSessionId',
        'platformSessionId' => 'PlatformSessionId',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->customSessionId) {
            $res['CustomSessionId'] = $this->customSessionId;
        }
        if (null !== $this->platformSessionId) {
            $res['PlatformSessionId'] = $this->platformSessionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppSessionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['CustomSessionId'])) {
            $model->customSessionId = $map['CustomSessionId'];
        }
        if (isset($map['PlatformSessionId'])) {
            $model->platformSessionId = $map['PlatformSessionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
