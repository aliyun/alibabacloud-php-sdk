<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIASRJobResponseBody\AIASRJobList;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIASRJobResponseBody\nonExistAIASRJobIds;

class ListAIASRJobResponseBody extends Model
{
    /**
     * @var AIASRJobList
     */
    public $AIASRJobList;

    /**
     * @var nonExistAIASRJobIds
     */
    public $nonExistAIASRJobIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIASRJobList' => 'AIASRJobList',
        'nonExistAIASRJobIds' => 'NonExistAIASRJobIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIASRJobList) {
            $this->AIASRJobList->validate();
        }
        if (null !== $this->nonExistAIASRJobIds) {
            $this->nonExistAIASRJobIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIASRJobList) {
            $res['AIASRJobList'] = null !== $this->AIASRJobList ? $this->AIASRJobList->toArray($noStream) : $this->AIASRJobList;
        }

        if (null !== $this->nonExistAIASRJobIds) {
            $res['NonExistAIASRJobIds'] = null !== $this->nonExistAIASRJobIds ? $this->nonExistAIASRJobIds->toArray($noStream) : $this->nonExistAIASRJobIds;
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
        if (isset($map['AIASRJobList'])) {
            $model->AIASRJobList = AIASRJobList::fromMap($map['AIASRJobList']);
        }

        if (isset($map['NonExistAIASRJobIds'])) {
            $model->nonExistAIASRJobIds = nonExistAIASRJobIds::fromMap($map['NonExistAIASRJobIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
