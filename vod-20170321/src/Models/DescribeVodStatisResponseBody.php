<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStatisResponseBody\cdnData;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStatisResponseBody\storageData;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodStatisResponseBody\transcodeData;

class DescribeVodStatisResponseBody extends Model
{
    /**
     * @var cdnData
     */
    public $cdnData;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var storageData
     */
    public $storageData;

    /**
     * @var transcodeData
     */
    public $transcodeData;
    protected $_name = [
        'cdnData' => 'CdnData',
        'requestId' => 'RequestId',
        'storageData' => 'StorageData',
        'transcodeData' => 'TranscodeData',
    ];

    public function validate()
    {
        if (null !== $this->cdnData) {
            $this->cdnData->validate();
        }
        if (null !== $this->storageData) {
            $this->storageData->validate();
        }
        if (null !== $this->transcodeData) {
            $this->transcodeData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdnData) {
            $res['CdnData'] = null !== $this->cdnData ? $this->cdnData->toArray($noStream) : $this->cdnData;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->storageData) {
            $res['StorageData'] = null !== $this->storageData ? $this->storageData->toArray($noStream) : $this->storageData;
        }

        if (null !== $this->transcodeData) {
            $res['TranscodeData'] = null !== $this->transcodeData ? $this->transcodeData->toArray($noStream) : $this->transcodeData;
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
        if (isset($map['CdnData'])) {
            $model->cdnData = cdnData::fromMap($map['CdnData']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StorageData'])) {
            $model->storageData = storageData::fromMap($map['StorageData']);
        }

        if (isset($map['TranscodeData'])) {
            $model->transcodeData = transcodeData::fromMap($map['TranscodeData']);
        }

        return $model;
    }
}
