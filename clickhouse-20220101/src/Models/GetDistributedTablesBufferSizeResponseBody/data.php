<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models\GetDistributedTablesBufferSizeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $bufferSizeGiB;
    protected $_name = [
        'bufferSizeGiB' => 'BufferSizeGiB',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bufferSizeGiB) {
            $res['BufferSizeGiB'] = $this->bufferSizeGiB;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BufferSizeGiB'])) {
            $model->bufferSizeGiB = $map['BufferSizeGiB'];
        }

        return $model;
    }
}
