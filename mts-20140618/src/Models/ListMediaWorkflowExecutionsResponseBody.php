<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListMediaWorkflowExecutionsResponseBody\mediaWorkflowExecutionList;
use AlibabaCloud\Tea\Model;

class ListMediaWorkflowExecutionsResponseBody extends Model
{
    /**
     * @var mediaWorkflowExecutionList
     */
    public $mediaWorkflowExecutionList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $nextPageToken;
    protected $_name = [
        'mediaWorkflowExecutionList' => 'MediaWorkflowExecutionList',
        'requestId'                  => 'RequestId',
        'nextPageToken'              => 'NextPageToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaWorkflowExecutionList) {
            $res['MediaWorkflowExecutionList'] = null !== $this->mediaWorkflowExecutionList ? $this->mediaWorkflowExecutionList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMediaWorkflowExecutionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaWorkflowExecutionList'])) {
            $model->mediaWorkflowExecutionList = mediaWorkflowExecutionList::fromMap($map['MediaWorkflowExecutionList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }

        return $model;
    }
}
