<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoSummaryJobResponseBody\AIVideoSummaryJobList;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoSummaryJobResponseBody\nonExistAIVideoSummaryJobIds;

class ListAIVideoSummaryJobResponseBody extends Model
{
    /**
     * @var AIVideoSummaryJobList
     */
    public $AIVideoSummaryJobList;

    /**
     * @var nonExistAIVideoSummaryJobIds
     */
    public $nonExistAIVideoSummaryJobIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIVideoSummaryJobList' => 'AIVideoSummaryJobList',
        'nonExistAIVideoSummaryJobIds' => 'NonExistAIVideoSummaryJobIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIVideoSummaryJobList) {
            $this->AIVideoSummaryJobList->validate();
        }
        if (null !== $this->nonExistAIVideoSummaryJobIds) {
            $this->nonExistAIVideoSummaryJobIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoSummaryJobList) {
            $res['AIVideoSummaryJobList'] = null !== $this->AIVideoSummaryJobList ? $this->AIVideoSummaryJobList->toArray($noStream) : $this->AIVideoSummaryJobList;
        }

        if (null !== $this->nonExistAIVideoSummaryJobIds) {
            $res['NonExistAIVideoSummaryJobIds'] = null !== $this->nonExistAIVideoSummaryJobIds ? $this->nonExistAIVideoSummaryJobIds->toArray($noStream) : $this->nonExistAIVideoSummaryJobIds;
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
        if (isset($map['AIVideoSummaryJobList'])) {
            $model->AIVideoSummaryJobList = AIVideoSummaryJobList::fromMap($map['AIVideoSummaryJobList']);
        }

        if (isset($map['NonExistAIVideoSummaryJobIds'])) {
            $model->nonExistAIVideoSummaryJobIds = nonExistAIVideoSummaryJobIds::fromMap($map['NonExistAIVideoSummaryJobIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
