<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteEventSubRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * This parameter is required.
     *
     * @example 9qb1****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The subscription ID. You can obtain the ID from the response to the [CreateEventSub](https://help.aliyun.com/document_detail/2848209.html) operation.
     *
     * This parameter is required.
     *
     * @example ad53276431c****
     *
     * @var string
     */
    public $subscribeId;
    protected $_name = [
        'appId' => 'AppId',
        'subscribeId' => 'SubscribeId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->subscribeId) {
            $res['SubscribeId'] = $this->subscribeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEventSubRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['SubscribeId'])) {
            $model->subscribeId = $map['SubscribeId'];
        }

        return $model;
    }
}
