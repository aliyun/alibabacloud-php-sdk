<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UploadStreamByURLResponseBody extends Model
{
    /**
     * @description The OSS URL of the file.
     *
     * @example http://outin-***.oss-cn-shanghai.aliyuncs.com/stream/48555e8b-181dd5a8c07/48555e8b-181dd5a8c07.mp4
     *
     * @var string
     */
    public $fileURL;

    /**
     * @description The ID of the upload job.
     *
     * @example ****cdb3e74639973036bc84****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The ID of the media asset.
     *
     * @example 411bed50018971edb60b0764a0ec6***
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The request ID.
     *
     * @example ******89-C21D-4B78-AE24-3788B8******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The URL of the source file that is uploaded in the upload job.
     *
     * @example https://example.com/sample-stream.mp4
     *
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
