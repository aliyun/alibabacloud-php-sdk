<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryDatasetSwitchInfoRequest extends Model
{
    /**
     * @example 7c7223ae-****-3c744528014b
     *
     * @var string
     */
    public $cubeId;
    protected $_name = [
        'cubeId' => 'CubeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDatasetSwitchInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }

        return $model;
    }
}
