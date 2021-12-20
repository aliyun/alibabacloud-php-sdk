<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UploadStreamByURLResponseBody extends Model
{
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
    public $streamFileURL;

    /**
     * @var string
     */
    public $streamJobId;
    protected $_name = [
        'requestId'     => 'RequestId',
        'sourceURL'     => 'SourceURL',
        'streamFileURL' => 'StreamFileURL',
        'streamJobId'   => 'StreamJobId',
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
        if (null !== $this->sourceURL) {
            $res['SourceURL'] = $this->sourceURL;
        }
        if (null !== $this->streamFileURL) {
            $res['StreamFileURL'] = $this->streamFileURL;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceURL'])) {
            $model->sourceURL = $map['SourceURL'];
        }
        if (isset($map['StreamFileURL'])) {
            $model->streamFileURL = $map['StreamFileURL'];
        }
        if (isset($map['StreamJobId'])) {
            $model->streamJobId = $map['StreamJobId'];
        }

        return $model;
    }
}
