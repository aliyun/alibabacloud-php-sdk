<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowListResponseBody\mediaWorkflowList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMediaWorkflowListResponseBody\nonExistMediaWorkflowIds;

class QueryMediaWorkflowListResponseBody extends Model
{
    /**
     * @var mediaWorkflowList
     */
    public $mediaWorkflowList;

    /**
     * @var nonExistMediaWorkflowIds
     */
    public $nonExistMediaWorkflowIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaWorkflowList' => 'MediaWorkflowList',
        'nonExistMediaWorkflowIds' => 'NonExistMediaWorkflowIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mediaWorkflowList) {
            $this->mediaWorkflowList->validate();
        }
        if (null !== $this->nonExistMediaWorkflowIds) {
            $this->nonExistMediaWorkflowIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaWorkflowList) {
            $res['MediaWorkflowList'] = null !== $this->mediaWorkflowList ? $this->mediaWorkflowList->toArray($noStream) : $this->mediaWorkflowList;
        }

        if (null !== $this->nonExistMediaWorkflowIds) {
            $res['NonExistMediaWorkflowIds'] = null !== $this->nonExistMediaWorkflowIds ? $this->nonExistMediaWorkflowIds->toArray($noStream) : $this->nonExistMediaWorkflowIds;
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
        if (isset($map['MediaWorkflowList'])) {
            $model->mediaWorkflowList = mediaWorkflowList::fromMap($map['MediaWorkflowList']);
        }

        if (isset($map['NonExistMediaWorkflowIds'])) {
            $model->nonExistMediaWorkflowIds = nonExistMediaWorkflowIds::fromMap($map['NonExistMediaWorkflowIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
