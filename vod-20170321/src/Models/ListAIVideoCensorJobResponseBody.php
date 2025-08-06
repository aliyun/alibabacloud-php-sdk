<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoCensorJobResponseBody\AIVideoCensorJobList;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoCensorJobResponseBody\nonExistAIVideoCensorJobIds;

class ListAIVideoCensorJobResponseBody extends Model
{
    /**
     * @var AIVideoCensorJobList
     */
    public $AIVideoCensorJobList;

    /**
     * @var nonExistAIVideoCensorJobIds
     */
    public $nonExistAIVideoCensorJobIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIVideoCensorJobList' => 'AIVideoCensorJobList',
        'nonExistAIVideoCensorJobIds' => 'NonExistAIVideoCensorJobIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIVideoCensorJobList) {
            $this->AIVideoCensorJobList->validate();
        }
        if (null !== $this->nonExistAIVideoCensorJobIds) {
            $this->nonExistAIVideoCensorJobIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoCensorJobList) {
            $res['AIVideoCensorJobList'] = null !== $this->AIVideoCensorJobList ? $this->AIVideoCensorJobList->toArray($noStream) : $this->AIVideoCensorJobList;
        }

        if (null !== $this->nonExistAIVideoCensorJobIds) {
            $res['NonExistAIVideoCensorJobIds'] = null !== $this->nonExistAIVideoCensorJobIds ? $this->nonExistAIVideoCensorJobIds->toArray($noStream) : $this->nonExistAIVideoCensorJobIds;
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
        if (isset($map['AIVideoCensorJobList'])) {
            $model->AIVideoCensorJobList = AIVideoCensorJobList::fromMap($map['AIVideoCensorJobList']);
        }

        if (isset($map['NonExistAIVideoCensorJobIds'])) {
            $model->nonExistAIVideoCensorJobIds = nonExistAIVideoCensorJobIds::fromMap($map['NonExistAIVideoCensorJobIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
