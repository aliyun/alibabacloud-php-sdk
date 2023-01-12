<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class GetUserInfoRequest extends Model
{
    /**
     * @example alipay
     *
     * @var string
     */
    public $appName;

    /**
     * @example LMALL20******001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example {}
     *
     * @var string
     */
    public $queryJson;

    /**
     * @example ""
     *
     * @var string
     */
    public $userFlag;
    protected $_name = [
        'appName'   => 'AppName',
        'bizId'     => 'BizId',
        'queryJson' => 'QueryJson',
        'userFlag'  => 'UserFlag',
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
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->queryJson) {
            $res['QueryJson'] = $this->queryJson;
        }
        if (null !== $this->userFlag) {
            $res['UserFlag'] = $this->userFlag;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['QueryJson'])) {
            $model->queryJson = $map['QueryJson'];
        }
        if (isset($map['UserFlag'])) {
            $model->userFlag = $map['UserFlag'];
        }

        return $model;
    }
}
