<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoTagJobResponseBody\AIVideoTagJobList;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoTagJobResponseBody\nonExistAIVideoTagJobIds;

class ListAIVideoTagJobResponseBody extends Model
{
    /**
     * @var AIVideoTagJobList
     */
    public $AIVideoTagJobList;

    /**
     * @var nonExistAIVideoTagJobIds
     */
    public $nonExistAIVideoTagJobIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIVideoTagJobList' => 'AIVideoTagJobList',
        'nonExistAIVideoTagJobIds' => 'NonExistAIVideoTagJobIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIVideoTagJobList) {
            $this->AIVideoTagJobList->validate();
        }
        if (null !== $this->nonExistAIVideoTagJobIds) {
            $this->nonExistAIVideoTagJobIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoTagJobList) {
            $res['AIVideoTagJobList'] = null !== $this->AIVideoTagJobList ? $this->AIVideoTagJobList->toArray($noStream) : $this->AIVideoTagJobList;
        }

        if (null !== $this->nonExistAIVideoTagJobIds) {
            $res['NonExistAIVideoTagJobIds'] = null !== $this->nonExistAIVideoTagJobIds ? $this->nonExistAIVideoTagJobIds->toArray($noStream) : $this->nonExistAIVideoTagJobIds;
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
        if (isset($map['AIVideoTagJobList'])) {
            $model->AIVideoTagJobList = AIVideoTagJobList::fromMap($map['AIVideoTagJobList']);
        }

        if (isset($map['NonExistAIVideoTagJobIds'])) {
            $model->nonExistAIVideoTagJobIds = nonExistAIVideoTagJobIds::fromMap($map['NonExistAIVideoTagJobIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
