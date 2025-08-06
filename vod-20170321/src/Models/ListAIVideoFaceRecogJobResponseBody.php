<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoFaceRecogJobResponseBody\AIVideoFaceRecogJobList;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoFaceRecogJobResponseBody\nonExistAIVideoFaceRecogJobIds;

class ListAIVideoFaceRecogJobResponseBody extends Model
{
    /**
     * @var AIVideoFaceRecogJobList
     */
    public $AIVideoFaceRecogJobList;

    /**
     * @var nonExistAIVideoFaceRecogJobIds
     */
    public $nonExistAIVideoFaceRecogJobIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIVideoFaceRecogJobList' => 'AIVideoFaceRecogJobList',
        'nonExistAIVideoFaceRecogJobIds' => 'NonExistAIVideoFaceRecogJobIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIVideoFaceRecogJobList) {
            $this->AIVideoFaceRecogJobList->validate();
        }
        if (null !== $this->nonExistAIVideoFaceRecogJobIds) {
            $this->nonExistAIVideoFaceRecogJobIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoFaceRecogJobList) {
            $res['AIVideoFaceRecogJobList'] = null !== $this->AIVideoFaceRecogJobList ? $this->AIVideoFaceRecogJobList->toArray($noStream) : $this->AIVideoFaceRecogJobList;
        }

        if (null !== $this->nonExistAIVideoFaceRecogJobIds) {
            $res['NonExistAIVideoFaceRecogJobIds'] = null !== $this->nonExistAIVideoFaceRecogJobIds ? $this->nonExistAIVideoFaceRecogJobIds->toArray($noStream) : $this->nonExistAIVideoFaceRecogJobIds;
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
        if (isset($map['AIVideoFaceRecogJobList'])) {
            $model->AIVideoFaceRecogJobList = AIVideoFaceRecogJobList::fromMap($map['AIVideoFaceRecogJobList']);
        }

        if (isset($map['NonExistAIVideoFaceRecogJobIds'])) {
            $model->nonExistAIVideoFaceRecogJobIds = nonExistAIVideoFaceRecogJobIds::fromMap($map['NonExistAIVideoFaceRecogJobIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
