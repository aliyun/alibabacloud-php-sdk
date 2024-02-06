<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageInfosRequest extends Model
{
    /**
     * @description The operating system (OS). You can specify only one OS in a request. If you do not specify a value for this parameter, images for all supported OSs are queried. Valid values:
     *
     *   linux
     *   windows
     *
     * @example linux
     *
     * @var string
     */
    public $osType;
    protected $_name = [
        'osType' => 'OsType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        return $model;
    }
}
