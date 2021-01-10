<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models;

use AlibabaCloud\Tea\Model;

class GetAlgorithmDetailRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmCode;
    protected $_name = [
        'algorithmCode' => 'AlgorithmCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmCode) {
            $res['AlgorithmCode'] = $this->algorithmCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlgorithmDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmCode'])) {
            $model->algorithmCode = $map['AlgorithmCode'];
        }

        return $model;
    }
}
