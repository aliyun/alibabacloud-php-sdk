<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class UpdateAlgorithmVersionResponseBody extends Model
{
    /**
     * @example algo-sidjc8134hv
     *
     * @var string
     */
    public $algorithmId;

    /**
     * @example v0.1.0
     *
     * @var string
     */
    public $algorithmVersion;
    protected $_name = [
        'algorithmId' => 'AlgorithmId',
        'algorithmVersion' => 'AlgorithmVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmId) {
            $res['AlgorithmId'] = $this->algorithmId;
        }
        if (null !== $this->algorithmVersion) {
            $res['AlgorithmVersion'] = $this->algorithmVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAlgorithmVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmId'])) {
            $model->algorithmId = $map['AlgorithmId'];
        }
        if (isset($map['AlgorithmVersion'])) {
            $model->algorithmVersion = $map['AlgorithmVersion'];
        }

        return $model;
    }
}
