<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListResponseBody\data\saveAnnotationMissionSessionListRequest;

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
     * @var bool
     */
    public $success;
    protected $_name = [
        'message' => 'Message',
        'messageList' => 'MessageList',
        'saveAnnotationMissionSessionListRequest' => 'SaveAnnotationMissionSessionListRequest',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->messageList)) {
            Model::validateArray($this->messageList);
        }
        if (null !== $this->saveAnnotationMissionSessionListRequest) {
            $this->saveAnnotationMissionSessionListRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->messageList) {
            if (\is_array($this->messageList)) {
                $res['MessageList'] = [];
                $n1 = 0;
                foreach ($this->messageList as $item1) {
                    $res['MessageList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->saveAnnotationMissionSessionListRequest) {
            $res['SaveAnnotationMissionSessionListRequest'] = null !== $this->saveAnnotationMissionSessionListRequest ? $this->saveAnnotationMissionSessionListRequest->toArray($noStream) : $this->saveAnnotationMissionSessionListRequest;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['MessageList'])) {
            if (!empty($map['MessageList'])) {
                $model->messageList = [];
                $n1 = 0;
                foreach ($map['MessageList'] as $item1) {
                    $model->messageList[$n1++] = $item1;
                }
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
