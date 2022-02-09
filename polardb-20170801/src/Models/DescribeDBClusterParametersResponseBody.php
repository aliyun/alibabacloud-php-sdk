<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponseBody\runningParameters;
use AlibabaCloud\Tea\Model;

class DescribeDBClusterParametersResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var runningParameters
     */
    public $runningParameters;
    protected $_name = [
        'DBType'            => 'DBType',
        'DBVersion'         => 'DBVersion',
        'engine'            => 'Engine',
        'requestId'         => 'RequestId',
        'runningParameters' => 'RunningParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->runningParameters) {
            $res['RunningParameters'] = null !== $this->runningParameters ? $this->runningParameters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterParametersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RunningParameters'])) {
            $model->runningParameters = runningParameters::fromMap($map['RunningParameters']);
        }

        return $model;
    }
}
