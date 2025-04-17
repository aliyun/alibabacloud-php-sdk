<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class UploadStreamByURLResponseBody extends Model
{
    /**
     * @var string
     */
    public $fileURL;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourceURL;

    /**
     * @var string
     */
    public $streamJobId;
    protected $_name = [
        'fileURL' => 'FileURL',
        'requestId' => 'RequestId',
        'sourceURL' => 'SourceURL',
        'streamJobId' => 'StreamJobId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceURL) {
            $res['SourceURL'] = $this->sourceURL;
        }

        if (null !== $this->streamJobId) {
            $res['StreamJobId'] = $this->streamJobId;
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
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SourceURL'])) {
            $model->sourceURL = $map['SourceURL'];
        }

        if (isset($map['StreamJobId'])) {
            $model->streamJobId = $map['StreamJobId'];
        }

        return $model;
    }
}
