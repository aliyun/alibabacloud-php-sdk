<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DeleteRoutineConfEnvsRequest extends Model
{
    /**
     * @description The name of the routine. The name must be unique among the routines that belong to the same Alibaba Cloud account.
     *
     * @example ["presetCanaryZheJiang"]
     *
     * @var mixed[]
     */
    public $envs;

    /**
     * @description >
     *   This operation deletes only custom preset canary release environments. You cannot delete production or staging environments.
     *   You can call this operation up to 100 times per second per account.
     *
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'envs' => 'Envs',
        'name' => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteRoutineConfEnvsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
