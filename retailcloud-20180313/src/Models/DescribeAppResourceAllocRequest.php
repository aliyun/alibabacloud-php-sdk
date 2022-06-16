<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppResourceAllocRequest extends Model
{
    /**
     * @var int
     */
    public $appEnvId;
    protected $_name = [
        'appEnvId' => 'AppEnvId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appEnvId) {
            $res['AppEnvId'] = $this->appEnvId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppResourceAllocRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppEnvId'])) {
            $model->appEnvId = $map['AppEnvId'];
        }

        return $model;
    }
}
