<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowSubTasksResponseBody\dataFlowSubTask\dataFlowSubTask;

use AlibabaCloud\Tea\Model;

class fileDetail extends Model
{
    /**
     * @description The checksum. Format example: crc64:123456.
     *
     * @example crc64:850309505450944****
     *
     * @var string
     */
    public $checksum;

    /**
     * @description The time when the file was modified. The value is a UNIX timestamp. Unit: ns.
     *
     * @example 1721167603
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The file size. Unit: bytes.
     *
     * @example 68
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'checksum' => 'Checksum',
        'modifyTime' => 'ModifyTime',
        'size' => 'Size',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checksum) {
            $res['Checksum'] = $this->checksum;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Checksum'])) {
            $model->checksum = $map['Checksum'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
