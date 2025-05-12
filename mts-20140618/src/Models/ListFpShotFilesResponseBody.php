<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\ListFpShotFilesResponseBody\fpShotFileList;

class ListFpShotFilesResponseBody extends Model
{
    /**
     * @var fpShotFileList
     */
    public $fpShotFileList;

    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fpShotFileList' => 'FpShotFileList',
        'nextPageToken' => 'NextPageToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->fpShotFileList) {
            $this->fpShotFileList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpShotFileList) {
            $res['FpShotFileList'] = null !== $this->fpShotFileList ? $this->fpShotFileList->toArray($noStream) : $this->fpShotFileList;
        }

        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
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
        if (isset($map['FpShotFileList'])) {
            $model->fpShotFileList = fpShotFileList::fromMap($map['FpShotFileList']);
        }

        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
