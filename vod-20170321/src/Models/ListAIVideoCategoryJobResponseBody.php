<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoCategoryJobResponseBody\AIVideoCategoryJobList;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoCategoryJobResponseBody\nonExistAIVideoCategoryJobIds;

class ListAIVideoCategoryJobResponseBody extends Model
{
    /**
     * @var AIVideoCategoryJobList
     */
    public $AIVideoCategoryJobList;

    /**
     * @var nonExistAIVideoCategoryJobIds
     */
    public $nonExistAIVideoCategoryJobIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIVideoCategoryJobList' => 'AIVideoCategoryJobList',
        'nonExistAIVideoCategoryJobIds' => 'NonExistAIVideoCategoryJobIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIVideoCategoryJobList) {
            $this->AIVideoCategoryJobList->validate();
        }
        if (null !== $this->nonExistAIVideoCategoryJobIds) {
            $this->nonExistAIVideoCategoryJobIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoCategoryJobList) {
            $res['AIVideoCategoryJobList'] = null !== $this->AIVideoCategoryJobList ? $this->AIVideoCategoryJobList->toArray($noStream) : $this->AIVideoCategoryJobList;
        }

        if (null !== $this->nonExistAIVideoCategoryJobIds) {
            $res['NonExistAIVideoCategoryJobIds'] = null !== $this->nonExistAIVideoCategoryJobIds ? $this->nonExistAIVideoCategoryJobIds->toArray($noStream) : $this->nonExistAIVideoCategoryJobIds;
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
        if (isset($map['AIVideoCategoryJobList'])) {
            $model->AIVideoCategoryJobList = AIVideoCategoryJobList::fromMap($map['AIVideoCategoryJobList']);
        }

        if (isset($map['NonExistAIVideoCategoryJobIds'])) {
            $model->nonExistAIVideoCategoryJobIds = nonExistAIVideoCategoryJobIds::fromMap($map['NonExistAIVideoCategoryJobIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
