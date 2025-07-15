<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLiveMessageUserMessageRequest extends Model
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
     * @description The data center where the interactive messaging application is deployed. Set this parameter to the value of DataCenter that you specified when you called the [CreateLiveMessageApp](https://help.aliyun.com/document_detail/2593195.html) operation. Valid values: cn-shanghai (Shanghai) and ap-southeast-1 (Singapore).
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description The ID of the user who performs the deletion operation. The ID can contain only letters and digits and can be up to 64 bytes in length.
     *
     * @example 169830****
     *
     * @var string
     */
    public $deleterId;

    /**
     * @description The additional information about the user who performs the deletion operation. The value can be up to 512 bytes in length.
     *
     * @example username
     *
     * @var string
     */
    public $deleterInfo;

    /**
     * @description The ID of the message that you want to delete. Set this parameter to the value of MsgTid that you specified when you called the SendLiveMessageUser operation. The ID can contain only letters and digits and can be up to 64 bytes in length.
     *
     * This parameter is required.
     *
     * @example **********
     *
     * @var string
     */
    public $messageId;

    /**
     * @description The ID of the user who received the message to delete. The ID can contain only letters and digits and can be up to 64 bytes in length.
     *
     * This parameter is required.
     *
     * @example 169830****
     *
     * @var string
     */
    public $receiverId;
    protected $_name = [
        'appId' => 'AppId',
        'dataCenter' => 'DataCenter',
        'deleterId' => 'DeleterId',
        'deleterInfo' => 'DeleterInfo',
        'messageId' => 'MessageId',
        'receiverId' => 'ReceiverId',
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
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->receiverId) {
            $res['ReceiverId'] = $this->receiverId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLiveMessageUserMessageRequest
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
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['ReceiverId'])) {
            $model->receiverId = $map['ReceiverId'];
        }

        return $model;
    }
}
