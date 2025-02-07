<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class CreateScheduledPreloadExecutionsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $executionsShrink;
    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'executionsShrink' => 'Executions',
        'id'               => 'Id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
