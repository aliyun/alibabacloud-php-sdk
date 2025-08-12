<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class RemoveShowFromShowListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $showId;

    /**
     * @var string
     */
    public $failedList;

    /**
     * @var string
     */
    public $successfulShowIds;
    protected $_name = [
        'requestId' => 'RequestId',
        'showId' => 'ShowId',
        'failedList' => 'failedList',
        'successfulShowIds' => 'successfulShowIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->showId) {
            $res['ShowId'] = $this->showId;
        }

        if (null !== $this->failedList) {
            $res['failedList'] = $this->failedList;
        }

        if (null !== $this->successfulShowIds) {
            $res['successfulShowIds'] = $this->successfulShowIds;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ShowId'])) {
            $model->showId = $map['ShowId'];
        }

        if (isset($map['failedList'])) {
            $model->failedList = $map['failedList'];
        }

        if (isset($map['successfulShowIds'])) {
            $model->successfulShowIds = $map['successfulShowIds'];
        }

        return $model;
    }
}
