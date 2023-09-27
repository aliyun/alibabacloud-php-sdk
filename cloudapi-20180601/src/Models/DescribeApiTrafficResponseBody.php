<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiTrafficResponseBody\downloads;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiTrafficResponseBody\uploads;
use AlibabaCloud\Tea\Model;

class DescribeApiTrafficResponseBody extends Model
{
    /**
     * @var downloads
     */
    public $downloads;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var uploads
     */
    public $uploads;
    protected $_name = [
        'downloads' => 'Downloads',
        'requestId' => 'RequestId',
        'uploads'   => 'Uploads',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloads) {
            $res['Downloads'] = null !== $this->downloads ? $this->downloads->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uploads) {
            $res['Uploads'] = null !== $this->uploads ? $this->uploads->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiTrafficResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Downloads'])) {
            $model->downloads = downloads::fromMap($map['Downloads']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Uploads'])) {
            $model->uploads = uploads::fromMap($map['Uploads']);
        }

        return $model;
    }
}
