<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class EvaluateResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceAvailable;
    /**
     * @var string
     */
    public $engine;
    /**
     * @var string
     */
    public $engineVersion;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceAvailable' => 'DBInstanceAvailable',
        'engine'              => 'Engine',
        'engineVersion'       => 'EngineVersion',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceAvailable) {
            $res['DBInstanceAvailable'] = $this->DBInstanceAvailable;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceAvailable'])) {
            $model->DBInstanceAvailable = $map['DBInstanceAvailable'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
