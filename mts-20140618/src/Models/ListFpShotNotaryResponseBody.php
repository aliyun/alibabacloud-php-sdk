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
     * @var string
     */
    public $nextPageToken;

    /**
     * @var fpShotNotaryList
     */
    public $fpShotNotaryList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'nextPageToken'    => 'NextPageToken',
        'fpShotNotaryList' => 'FpShotNotaryList',
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
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->fpShotNotaryList) {
            $res['FpShotNotaryList'] = null !== $this->fpShotNotaryList ? $this->fpShotNotaryList->toMap() : null;
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
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['FpShotNotaryList'])) {
            $model->fpShotNotaryList = fpShotNotaryList::fromMap($map['FpShotNotaryList']);
        }

        return $model;
    }
}
