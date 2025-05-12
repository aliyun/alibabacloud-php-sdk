<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotDBResponseBody\fpShotDBList;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotDBResponseBody\nonExistIds;

class ListFpShotDBResponseBody extends Model
{
    /**
     * @var fpShotDBList
     */
    public $fpShotDBList;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fpShotDBList' => 'FpShotDBList',
        'nonExistIds' => 'NonExistIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->fpShotDBList) {
            $this->fpShotDBList->validate();
        }
        if (null !== $this->nonExistIds) {
            $this->nonExistIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpShotDBList) {
            $res['FpShotDBList'] = null !== $this->fpShotDBList ? $this->fpShotDBList->toArray($noStream) : $this->fpShotDBList;
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
        if (isset($map['FpShotDBList'])) {
            $model->fpShotDBList = fpShotDBList::fromMap($map['FpShotDBList']);
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
