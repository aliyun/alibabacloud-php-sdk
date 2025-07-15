<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CheckLiveMessageUsersOnlineShrinkRequest extends Model
{
    /**
     * @description The application ID.
     *
     * This parameter is required.
     *
     * @example demo
     *
     * @var string
     */
    public $appId;

    /**
     * @description The data center. It must be the same as the data center that was specified when you called the [CreateLiveMessageApp](https://help.aliyun.com/document_detail/2848162.html) operation to create the interactive messaging application. Valid values: cn-shanghai and ap-southeast-1 (Singapore).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description The list of users that you want to query.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $userIdsShrink;
    protected $_name = [
        'appId' => 'AppId',
        'dataCenter' => 'DataCenter',
        'userIdsShrink' => 'UserIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->userIdsShrink) {
            $res['UserIds'] = $this->userIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckLiveMessageUsersOnlineShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['UserIds'])) {
            $model->userIdsShrink = $map['UserIds'];
        }

        return $model;
    }
}
