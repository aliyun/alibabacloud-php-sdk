<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Grace\V20220606\Models;

use AlibabaCloud\Tea\Model;

class UploadFileByOSSResponseBody extends Model
{
    /**
     * @example 1597871211794192-1665457027646-grace-storage1-heap.bin
     *
     * @var string
     */
    public $name;

    /**
     * @example E7D6CC4E-C216-5313-A9A5-B5DA619ED431
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'name'      => 'name',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadFileByOSSResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
