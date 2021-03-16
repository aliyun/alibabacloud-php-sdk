<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotFilesResponseBody\fpShotFileList;
use AlibabaCloud\Tea\Model;

class ListFpShotFilesResponseBody extends Model
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
     * @var fpShotFileList
     */
    public $fpShotFileList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'nextPageToken'  => 'NextPageToken',
        'fpShotFileList' => 'FpShotFileList',
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
        if (null !== $this->fpShotFileList) {
            $res['FpShotFileList'] = null !== $this->fpShotFileList ? $this->fpShotFileList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFpShotFilesResponseBody
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
        if (isset($map['FpShotFileList'])) {
            $model->fpShotFileList = fpShotFileList::fromMap($map['FpShotFileList']);
        }

        return $model;
    }
}
