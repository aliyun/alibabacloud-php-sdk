<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class CreateRoutineRequest extends Model
{
    /**
     * @description The description of the routine.
     *
     * @example the description of this routine
     *
     * @var string
     */
    public $description;

    /**
     * @description The configurations of the specified environment.
     *
     * @example {"staging":{"SpecName":"50ms"},"production":{"SpecName":"50ms"}}
     *
     * @var mixed[]
     */
    public $envConf;

    /**
     * @description The name of the routine. The name must be unique among the routines that belong to the same Alibaba Cloud account.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'envConf'     => 'EnvConf',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->envConf) {
            $res['EnvConf'] = $this->envConf;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRoutineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvConf'])) {
            $model->envConf = $map['EnvConf'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
