<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifyParametersRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var bool
     */
    public $forceRestartInstance;
    protected $_name = [
        'DBInstanceId'         => 'DBInstanceId',
        'parameters'           => 'Parameters',
        'forceRestartInstance' => 'ForceRestartInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->forceRestartInstance) {
            $res['ForceRestartInstance'] = $this->forceRestartInstance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyParametersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['ForceRestartInstance'])) {
            $model->forceRestartInstance = $map['ForceRestartInstance'];
        }

        return $model;
    }
}
