<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class PutLogsHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description The compression format. lz4 and gzip are supported.
     *
     * This parameter is required.
     * @example lz4
     *
     * @var string
     */
    public $xLogCompresstype;
    protected $_name = [
        'xLogCompresstype' => 'x-log-compresstype',
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
        if (null !== $this->xLogCompresstype) {
            $res['x-log-compresstype'] = $this->xLogCompresstype;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutLogsHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['x-log-compresstype'])) {
            $model->xLogCompresstype = $map['x-log-compresstype'];
        }

        return $model;
    }
}
