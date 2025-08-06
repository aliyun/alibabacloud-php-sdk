<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoPornRecogJobResponseBody\AIVideoPornRecogJobList;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoPornRecogJobResponseBody\nonExistPornRecogJobIds;

class ListAIVideoPornRecogJobResponseBody extends Model
{
    /**
     * @var AIVideoPornRecogJobList
     */
    public $AIVideoPornRecogJobList;

    /**
     * @var nonExistPornRecogJobIds
     */
    public $nonExistPornRecogJobIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIVideoPornRecogJobList' => 'AIVideoPornRecogJobList',
        'nonExistPornRecogJobIds' => 'NonExistPornRecogJobIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIVideoPornRecogJobList) {
            $this->AIVideoPornRecogJobList->validate();
        }
        if (null !== $this->nonExistPornRecogJobIds) {
            $this->nonExistPornRecogJobIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoPornRecogJobList) {
            $res['AIVideoPornRecogJobList'] = null !== $this->AIVideoPornRecogJobList ? $this->AIVideoPornRecogJobList->toArray($noStream) : $this->AIVideoPornRecogJobList;
        }

        if (null !== $this->nonExistPornRecogJobIds) {
            $res['NonExistPornRecogJobIds'] = null !== $this->nonExistPornRecogJobIds ? $this->nonExistPornRecogJobIds->toArray($noStream) : $this->nonExistPornRecogJobIds;
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
        if (isset($map['AIVideoPornRecogJobList'])) {
            $model->AIVideoPornRecogJobList = AIVideoPornRecogJobList::fromMap($map['AIVideoPornRecogJobList']);
        }

        if (isset($map['NonExistPornRecogJobIds'])) {
            $model->nonExistPornRecogJobIds = nonExistPornRecogJobIds::fromMap($map['NonExistPornRecogJobIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
