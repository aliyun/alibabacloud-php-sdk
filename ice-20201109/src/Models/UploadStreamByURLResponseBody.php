<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UploadStreamByURLResponseBody extends Model
{
    /**
     * @var string
     */
    public $fileURL;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourceURL;
    protected $_name = [
        'fileURL'   => 'FileURL',
        'jobId'     => 'JobId',
        'mediaId'   => 'MediaId',
        'requestId' => 'RequestId',
        'sourceURL' => 'SourceURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceURL) {
            $res['SourceURL'] = $this->sourceURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadStreamByURLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceURL'])) {
            $model->sourceURL = $map['SourceURL'];
        }

        return $model;
    }
}
