<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListResponseBody;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListResponseBody\data\saveAnnotationMissionSessionListRequest;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string[]
     */
    public $messageList;

    /**
     * @var saveAnnotationMissionSessionListRequest
     */
    public $saveAnnotationMissionSessionListRequest;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'message' => 'Message',
        'messageList' => 'MessageList',
        'saveAnnotationMissionSessionListRequest' => 'SaveAnnotationMissionSessionListRequest',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->messageList) {
            $res['MessageList'] = $this->messageList;
        }
        if (null !== $this->saveAnnotationMissionSessionListRequest) {
            $res['SaveAnnotationMissionSessionListRequest'] = null !== $this->saveAnnotationMissionSessionListRequest ? $this->saveAnnotationMissionSessionListRequest->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MessageList'])) {
            if (!empty($map['MessageList'])) {
                $model->messageList = $map['MessageList'];
            }
        }
        if (isset($map['SaveAnnotationMissionSessionListRequest'])) {
            $model->saveAnnotationMissionSessionListRequest = saveAnnotationMissionSessionListRequest::fromMap($map['SaveAnnotationMissionSessionListRequest']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
