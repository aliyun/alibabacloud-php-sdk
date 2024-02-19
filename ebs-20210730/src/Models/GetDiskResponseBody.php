<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\GetDiskResponseBody\disk;
use AlibabaCloud\Tea\Model;

class GetDiskResponseBody extends Model
{
    /**
     * @description The information of the disk.
     *
     * @var disk
     */
    public $disk;

    /**
     * @description The request ID.
     *
     * @example B9C4B3B3-0D72-5FB0-9319-F4D3BB9E22AC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'disk'      => 'Disk',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disk) {
            $res['Disk'] = null !== $this->disk ? $this->disk->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDiskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Disk'])) {
            $model->disk = disk::fromMap($map['Disk']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
