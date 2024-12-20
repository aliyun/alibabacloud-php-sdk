<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetLogsV2Headers extends Model
{
    public $commonHeaders;

    /**
     * @description The compression format.
     *
     *   For Java, Python, and Go, only the lz4 and gzip algorithms are supported for decompression.
     *   For PHP, JavaScript, and C#, only the gzip algorithm is supported for decompression.
     *
     * This parameter is required.
     * @example lz4
     *
     * @var string
     */
    public $acceptEncoding;
    protected $_name = [
        'acceptEncoding' => 'Accept-Encoding',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->acceptEncoding) {
            $res['Accept-Encoding'] = $this->acceptEncoding;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLogsV2Headers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['Accept-Encoding'])) {
            $model->acceptEncoding = $map['Accept-Encoding'];
        }

        return $model;
    }
}
