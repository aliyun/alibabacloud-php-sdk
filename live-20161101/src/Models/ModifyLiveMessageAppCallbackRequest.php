<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyLiveMessageAppCallbackRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application whose callback settings you want to modify.
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
     * @description The callback URL for events such as user logon, logoff, joining a group, and leaving a group. If you leave this parameter empty, callbacks are disabled. The callback URL must start with http:// or https:// and cannot contain a private IP address or a port number.
     *
     * @example http://example.aliyundoc.com/examplecallback
     *
     * @var string
     */
    public $eventCallbackUrl;
    protected $_name = [
        'appId' => 'AppId',
        'dataCenter' => 'DataCenter',
        'eventCallbackUrl' => 'EventCallbackUrl',
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
        if (null !== $this->eventCallbackUrl) {
            $res['EventCallbackUrl'] = $this->eventCallbackUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLiveMessageAppCallbackRequest
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
        if (isset($map['EventCallbackUrl'])) {
            $model->eventCallbackUrl = $map['EventCallbackUrl'];
        }

        return $model;
    }
}
