<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class ListVersionsRequest extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $drdsVer;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
        'drdsVer'        => 'DrdsVer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->drdsVer) {
            $res['DrdsVer'] = $this->drdsVer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['DrdsVer'])) {
            $model->drdsVer = $map['DrdsVer'];
        }

        return $model;
    }
}
