<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateScaleStrategyResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scaleStrategyId;
    protected $_name = [
        'requestId'       => 'RequestId',
        'scaleStrategyId' => 'ScaleStrategyId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('scaleStrategyId', $this->scaleStrategyId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scaleStrategyId) {
            $res['ScaleStrategyId'] = $this->scaleStrategyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScaleStrategyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScaleStrategyId'])) {
            $model->scaleStrategyId = $map['ScaleStrategyId'];
        }

        return $model;
    }
}
