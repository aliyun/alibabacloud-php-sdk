<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateScheduledPreloadExecutionsRequest\executions;

class CreateScheduledPreloadExecutionsRequest extends Model
{
    /**
     * @var executions[]
     */
    public $executions;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'executions' => 'Executions',
        'id' => 'Id',
    ];

    public function validate()
    {
        if (\is_array($this->executions)) {
            Model::validateArray($this->executions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executions) {
            if (\is_array($this->executions)) {
                $res['Executions'] = [];
                $n1 = 0;
                foreach ($this->executions as $item1) {
                    $res['Executions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['Executions'])) {
                $model->executions = [];
                $n1 = 0;
                foreach ($map['Executions'] as $item1) {
                    $model->executions[$n1++] = executions::fromMap($item1);
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
