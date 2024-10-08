<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateScheduledPreloadExecutionsShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $executionsShrink;

    /**
     * @example CreateScheduledPreloadExecutions
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'executionsShrink' => 'Executions',
        'id'               => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionsShrink) {
            $res['Executions'] = $this->executionsShrink;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScheduledPreloadExecutionsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Executions'])) {
            $model->executionsShrink = $map['Executions'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
