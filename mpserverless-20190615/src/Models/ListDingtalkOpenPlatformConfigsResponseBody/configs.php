<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListDingtalkOpenPlatformConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class configs extends Model
{
    /**
     * @example dingoa7pqicyk3x9******
     *
     * @var string
     */
    public $appId;

    /**
     * @example 1r0ElNPFqLI6qgY08*******************************9TIK3RN_5fk9SEMO
     *
     * @var string
     */
    public $appSecret;

    /**
     * @example 2020-01-17T03:04:46Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2020-01-17T03:04:46Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'appId'      => 'AppId',
        'appSecret'  => 'AppSecret',
        'createTime' => 'CreateTime',
        'updateTime' => 'UpdateTime',
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
        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
