<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLiveMessageGroupMessageRequest extends Model
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
     * @description The ID of the user who deletes the message. The ID must be up to 64 bytes in length and can contain letters and digits.
     *
     * @example 169830****
     *
     * @var string
     */
    public $deleterId;

    /**
     * @description The additional information about the user who performs the deletion operation. The value can be up to 512 bytes in length.
     *
     * @example testname
     *
     * @var string
     */
    public $deleterInfo;

    /**
     * @description The group ID.
     *
     * This parameter is required.
     *
     * @example grouptest
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the message that you want to delete. Set this parameter to the value of MsgTid that you specified when you called the SendLiveMessageGroup operation. The ID must be up to 64 bytes in length and can contain letters and digits.
     *
     * This parameter is required.
     *
     * @example a74a8fbd3cfe4b2daa8517e4e3******
     *
     * @var string
     */
    public $messageId;
    protected $_name = [
        'appId' => 'AppId',
        'dataCenter' => 'DataCenter',
        'deleterId' => 'DeleterId',
        'deleterInfo' => 'DeleterInfo',
        'groupId' => 'GroupId',
        'messageId' => 'MessageId',
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
        if (null !== $this->deleterId) {
            $res['DeleterId'] = $this->deleterId;
        }
        if (null !== $this->deleterInfo) {
            $res['DeleterInfo'] = $this->deleterInfo;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLiveMessageGroupMessageRequest
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
        if (isset($map['DeleterId'])) {
            $model->deleterId = $map['DeleterId'];
        }
        if (isset($map['DeleterInfo'])) {
            $model->deleterInfo = $map['DeleterInfo'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        return $model;
    }
}
