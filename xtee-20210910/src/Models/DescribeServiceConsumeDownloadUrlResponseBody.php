<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceConsumeDownloadUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $downloadFileUrl;
    protected $_name = [
        'requestId'       => 'RequestId',
        'downloadFileUrl' => 'downloadFileUrl',
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
        if (null !== $this->downloadFileUrl) {
            $res['downloadFileUrl'] = $this->downloadFileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceConsumeDownloadUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['downloadFileUrl'])) {
            $model->downloadFileUrl = $map['downloadFileUrl'];
        }

        return $model;
    }
}
