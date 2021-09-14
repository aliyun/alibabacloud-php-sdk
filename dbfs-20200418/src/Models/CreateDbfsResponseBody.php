<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class CreateDbfsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $fsId;
    protected $_name = [
        'requestId' => 'RequestId',
        'fsId'      => 'FsId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->fsId) {
            $res['FsId'] = $this->fsId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDbfsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FsId'])) {
            $model->fsId = $map['FsId'];
        }

        return $model;
    }
}
