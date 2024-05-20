<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class CreateAppRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example example
     *
     * @var string
     */
    public $appName;

    /**
     * @description This parameter is required.
     *
     * @example end_game
     *
     * @var string
     */
    public $appType;

    /**
     * @example 47d0bd4d-8815-48a2-b783-6cbba89d****
     *
     * @var string
     */
    public $streamingAppId;

    /**
     * @example self-have-streaming
     *
     * @var string
     */
    public $streamingSolution;
    protected $_name = [
        'appName'           => 'AppName',
        'appType'           => 'AppType',
        'streamingAppId'    => 'StreamingAppId',
        'streamingSolution' => 'StreamingSolution',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->streamingAppId) {
            $res['StreamingAppId'] = $this->streamingAppId;
        }
        if (null !== $this->streamingSolution) {
            $res['StreamingSolution'] = $this->streamingSolution;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['StreamingAppId'])) {
            $model->streamingAppId = $map['StreamingAppId'];
        }
        if (isset($map['StreamingSolution'])) {
            $model->streamingSolution = $map['StreamingSolution'];
        }

        return $model;
    }
}
