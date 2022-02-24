<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceAutoScalerResponseBody extends Model
{
    /**
     * @description 服务最大实例数
     *
     * @var int
     */
    public $maxReplica;

    /**
     * @description 服务最小实例数
     *
     * @var int
     */
    public $minReplica;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 服务名字
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description 扩缩控制器控制策略
     *
     * @var mixed[]
     */
    public $strategies;
    protected $_name = [
        'maxReplica'  => 'MaxReplica',
        'minReplica'  => 'MinReplica',
        'requestId'   => 'RequestId',
        'serviceName' => 'ServiceName',
        'strategies'  => 'Strategies',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxReplica) {
            $res['MaxReplica'] = $this->maxReplica;
        }
        if (null !== $this->minReplica) {
            $res['MinReplica'] = $this->minReplica;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->strategies) {
            $res['Strategies'] = $this->strategies;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceAutoScalerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxReplica'])) {
            $model->maxReplica = $map['MaxReplica'];
        }
        if (isset($map['MinReplica'])) {
            $model->minReplica = $map['MinReplica'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Strategies'])) {
            $model->strategies = $map['Strategies'];
        }

        return $model;
    }
}
