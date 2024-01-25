<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20211130\Models;

use AlibabaCloud\Tea\Model;

class GetComputeResultRequest extends Model
{
    /**
     * @var int
     */
    public $bcId;
    protected $_name = [
        'bcId' => 'bcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bcId) {
            $res['bcId'] = $this->bcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetComputeResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bcId'])) {
            $model->bcId = $map['bcId'];
        }

        return $model;
    }
}
