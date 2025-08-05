<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class ModifyParametersRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var bool
     */
    public $forceRestartInstance;

    /**
     * @var string
     */
    public $parameters;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'forceRestartInstance' => 'ForceRestartInstance',
        'parameters' => 'Parameters',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->forceRestartInstance) {
            $res['ForceRestartInstance'] = $this->forceRestartInstance;
        }

        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['ForceRestartInstance'])) {
            $model->forceRestartInstance = $map['ForceRestartInstance'];
        }

        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        return $model;
    }
}
