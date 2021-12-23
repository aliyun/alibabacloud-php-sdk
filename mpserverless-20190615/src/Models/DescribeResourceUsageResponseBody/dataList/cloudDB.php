<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeResourceUsageResponseBody\dataList;

use AlibabaCloud\Tea\Model;

class cloudDB extends Model
{
    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var int
     */
    public $read;

    /**
     * @var int
     */
    public $write;
    protected $_name = [
        'dataSize' => 'DataSize',
        'read'     => 'Read',
        'write'    => 'Write',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->read) {
            $res['Read'] = $this->read;
        }
        if (null !== $this->write) {
            $res['Write'] = $this->write;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudDB
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['Read'])) {
            $model->read = $map['Read'];
        }
        if (isset($map['Write'])) {
            $model->write = $map['Write'];
        }

        return $model;
    }
}
