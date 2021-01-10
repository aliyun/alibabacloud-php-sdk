<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class GetUserInfoRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $userFlag;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $queryJson;
    protected $_name = [
        'bizId'     => 'BizId',
        'userFlag'  => 'UserFlag',
        'appName'   => 'AppName',
        'queryJson' => 'QueryJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->userFlag) {
            $res['UserFlag'] = $this->userFlag;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->queryJson) {
            $res['QueryJson'] = $this->queryJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['UserFlag'])) {
            $model->userFlag = $map['UserFlag'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['QueryJson'])) {
            $model->queryJson = $map['QueryJson'];
        }

        return $model;
    }
}
