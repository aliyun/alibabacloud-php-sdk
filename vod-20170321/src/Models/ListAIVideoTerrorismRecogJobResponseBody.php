<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoTerrorismRecogJobResponseBody\AIVideoTerrorismRecogJobList;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListAIVideoTerrorismRecogJobResponseBody\nonExistTerrorismRecogJobIds;

class ListAIVideoTerrorismRecogJobResponseBody extends Model
{
    /**
     * @var AIVideoTerrorismRecogJobList
     */
    public $AIVideoTerrorismRecogJobList;

    /**
     * @var nonExistTerrorismRecogJobIds
     */
    public $nonExistTerrorismRecogJobIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'AIVideoTerrorismRecogJobList' => 'AIVideoTerrorismRecogJobList',
        'nonExistTerrorismRecogJobIds' => 'NonExistTerrorismRecogJobIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->AIVideoTerrorismRecogJobList) {
            $this->AIVideoTerrorismRecogJobList->validate();
        }
        if (null !== $this->nonExistTerrorismRecogJobIds) {
            $this->nonExistTerrorismRecogJobIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIVideoTerrorismRecogJobList) {
            $res['AIVideoTerrorismRecogJobList'] = null !== $this->AIVideoTerrorismRecogJobList ? $this->AIVideoTerrorismRecogJobList->toArray($noStream) : $this->AIVideoTerrorismRecogJobList;
        }

        if (null !== $this->nonExistTerrorismRecogJobIds) {
            $res['NonExistTerrorismRecogJobIds'] = null !== $this->nonExistTerrorismRecogJobIds ? $this->nonExistTerrorismRecogJobIds->toArray($noStream) : $this->nonExistTerrorismRecogJobIds;
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
        if (isset($map['AIVideoTerrorismRecogJobList'])) {
            $model->AIVideoTerrorismRecogJobList = AIVideoTerrorismRecogJobList::fromMap($map['AIVideoTerrorismRecogJobList']);
        }

        if (isset($map['NonExistTerrorismRecogJobIds'])) {
            $model->nonExistTerrorismRecogJobIds = nonExistTerrorismRecogJobIds::fromMap($map['NonExistTerrorismRecogJobIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
