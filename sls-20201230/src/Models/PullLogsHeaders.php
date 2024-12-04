<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class PullLogsHeaders extends Model
{
    public $commonHeaders;

    /**
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
     * @return PullLogsHeaders
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
