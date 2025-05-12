<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpFileDeleteJobListResponseBody\fpFileDeleteJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpFileDeleteJobListResponseBody\nonExistIds;

class QueryFpFileDeleteJobListResponseBody extends Model
{
    /**
     * @var fpFileDeleteJobList
     */
    public $fpFileDeleteJobList;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fpFileDeleteJobList' => 'FpFileDeleteJobList',
        'nonExistIds' => 'NonExistIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->fpFileDeleteJobList) {
            $this->fpFileDeleteJobList->validate();
        }
        if (null !== $this->nonExistIds) {
            $this->nonExistIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpFileDeleteJobList) {
            $res['FpFileDeleteJobList'] = null !== $this->fpFileDeleteJobList ? $this->fpFileDeleteJobList->toArray($noStream) : $this->fpFileDeleteJobList;
        }

        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toArray($noStream) : $this->nonExistIds;
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
        if (isset($map['FpFileDeleteJobList'])) {
            $model->fpFileDeleteJobList = fpFileDeleteJobList::fromMap($map['FpFileDeleteJobList']);
        }

        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
