<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotDBResponseBody\fpShotDBList;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotDBResponseBody\nonExistIds;
use AlibabaCloud\Tea\Model;

class ListFpShotDBResponseBody extends Model
{
    /**
     * @var fpShotDBList
     */
    public $fpShotDBList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var nonExistIds
     */
    public $nonExistIds;
    protected $_name = [
        'fpShotDBList' => 'FpShotDBList',
        'requestId'    => 'RequestId',
        'nonExistIds'  => 'NonExistIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fpShotDBList) {
            $res['FpShotDBList'] = null !== $this->fpShotDBList ? $this->fpShotDBList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nonExistIds) {
            $res['NonExistIds'] = null !== $this->nonExistIds ? $this->nonExistIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFpShotDBResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FpShotDBList'])) {
            $model->fpShotDBList = fpShotDBList::fromMap($map['FpShotDBList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NonExistIds'])) {
            $model->nonExistIds = nonExistIds::fromMap($map['NonExistIds']);
        }

        return $model;
    }
}
