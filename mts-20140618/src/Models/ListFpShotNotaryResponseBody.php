<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotNotaryResponseBody\fpShotNotaryList;
use AlibabaCloud\Tea\Model;

class ListFpShotNotaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var fpShotNotaryList
     */
    public $fpShotNotaryList;

    /**
     * @var string
     */
    public $nextPageToken;
    protected $_name = [
        'requestId'        => 'RequestId',
        'fpShotNotaryList' => 'FpShotNotaryList',
        'nextPageToken'    => 'NextPageToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->fpShotNotaryList) {
            $res['FpShotNotaryList'] = null !== $this->fpShotNotaryList ? $this->fpShotNotaryList->toMap() : null;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFpShotNotaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FpShotNotaryList'])) {
            $model->fpShotNotaryList = fpShotNotaryList::fromMap($map['FpShotNotaryList']);
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }

        return $model;
    }
}
