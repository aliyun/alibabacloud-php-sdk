<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class StopTrainRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmId;
    protected $_name = [
        'algorithmId' => 'AlgorithmId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmId) {
            $res['AlgorithmId'] = $this->algorithmId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopTrainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmId'])) {
            $model->algorithmId = $map['AlgorithmId'];
        }

        return $model;
    }
}
