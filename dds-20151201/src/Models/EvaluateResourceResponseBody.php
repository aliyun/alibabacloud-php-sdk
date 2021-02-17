<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class EvaluateResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceAvailable;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $engine;
    protected $_name = [
        'DBInstanceAvailable' => 'DBInstanceAvailable',
        'engineVersion'       => 'EngineVersion',
        'requestId'           => 'RequestId',
        'engine'              => 'Engine',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceAvailable) {
            $res['DBInstanceAvailable'] = $this->DBInstanceAvailable;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EvaluateResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceAvailable'])) {
            $model->DBInstanceAvailable = $map['DBInstanceAvailable'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        return $model;
    }
}
