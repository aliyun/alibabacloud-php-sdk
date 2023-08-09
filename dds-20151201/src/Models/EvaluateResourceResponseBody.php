<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class EvaluateResourceResponseBody extends Model
{
    /**
     * @description Indicates whether the resources are sufficient in the region. Valid values:
     *
     *   **1**: The resources are sufficient.
     *   **0**: The resources are insufficient.
     *
     * @example 1
     *
     * @var string
     */
    public $DBInstanceAvailable;

    /**
     * @description The database engine of the instance. Only MongoDB is returned.
     *
     * @example MongoDB
     *
     * @var string
     */
    public $engine;

    /**
     * @description The version of the database engine.
     *
     * @example 4.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The ID of the request.
     *
     * @example AE2DE465-E45F-481F-ABD8-37D64173****
     *
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
    }

    public function toMap()
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
