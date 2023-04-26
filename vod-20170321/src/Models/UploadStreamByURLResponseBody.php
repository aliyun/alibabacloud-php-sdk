<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UploadStreamByURLResponseBody extends Model
{
    /**
     * @example http://outin-31059bcee7810a200163e1c8dba****.oss-cn-shanghai.aliyuncs.com/lesson-01.mp4
     *
     * @var string
     */
    public $fileURL;

    /**
     * @description Uploads transcoded streams to ApsaraVideo VOD from external storage.
     *
     * @example 7AE96389-DF1E-598D-816B-7B40F13B4620
     *
     * @var string
     */
    public $requestId;

    /**
     * @example https://example.com/lesson-01.mp4
     *
     * @var string
     */
    public $sourceURL;

    /**
     * @description UploadStreamByURL
     *
     * @example e304b34fb3d959f92baef97b6496****
     *
     * @var string
     */
    public $streamJobId;
    protected $_name = [
        'fileURL'     => 'FileURL',
        'requestId'   => 'RequestId',
        'sourceURL'   => 'SourceURL',
        'streamJobId' => 'StreamJobId',
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
