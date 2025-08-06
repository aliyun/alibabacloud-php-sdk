<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoCoverJobResponseBody\AIVideoCoverJobList;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoCoverJobResponseBody\nonExistAIVideoCoverJobIds;

class ListAIVideoCoverJobResponseBody extends Model
{
    /**
     * @var AIVideoCoverJobList
     */
    public $AIVideoCoverJobList;

    /**
     * @var nonExistAIVideoCoverJobIds
     */
    public $nonExistAIVideoCoverJobIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIVideoCoverJobList' => 'AIVideoCoverJobList',
        'nonExistAIVideoCoverJobIds' => 'NonExistAIVideoCoverJobIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIVideoCoverJobList) {
            $this->AIVideoCoverJobList->validate();
        }
        if (null !== $this->nonExistAIVideoCoverJobIds) {
            $this->nonExistAIVideoCoverJobIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoCoverJobList) {
            $res['AIVideoCoverJobList'] = null !== $this->AIVideoCoverJobList ? $this->AIVideoCoverJobList->toArray($noStream) : $this->AIVideoCoverJobList;
        }

        if (null !== $this->nonExistAIVideoCoverJobIds) {
            $res['NonExistAIVideoCoverJobIds'] = null !== $this->nonExistAIVideoCoverJobIds ? $this->nonExistAIVideoCoverJobIds->toArray($noStream) : $this->nonExistAIVideoCoverJobIds;
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
        if (isset($map['AIVideoCoverJobList'])) {
            $model->AIVideoCoverJobList = AIVideoCoverJobList::fromMap($map['AIVideoCoverJobList']);
        }

        if (isset($map['NonExistAIVideoCoverJobIds'])) {
            $model->nonExistAIVideoCoverJobIds = nonExistAIVideoCoverJobIds::fromMap($map['NonExistAIVideoCoverJobIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
