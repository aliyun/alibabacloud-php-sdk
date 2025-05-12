<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListMediaWorkflowExecutionsResponseBody\mediaWorkflowExecutionList;

class ListMediaWorkflowExecutionsResponseBody extends Model
{
    /**
     * @var mediaWorkflowExecutionList
     */
    public $mediaWorkflowExecutionList;

    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaWorkflowExecutionList' => 'MediaWorkflowExecutionList',
        'nextPageToken' => 'NextPageToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaWorkflowExecutionList) {
            $this->mediaWorkflowExecutionList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaWorkflowExecutionList) {
            $res['MediaWorkflowExecutionList'] = null !== $this->mediaWorkflowExecutionList ? $this->mediaWorkflowExecutionList->toArray($noStream) : $this->mediaWorkflowExecutionList;
        }

        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MediaWorkflowExecutionList'])) {
            $model->mediaWorkflowExecutionList = mediaWorkflowExecutionList::fromMap($map['MediaWorkflowExecutionList']);
        }

        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
