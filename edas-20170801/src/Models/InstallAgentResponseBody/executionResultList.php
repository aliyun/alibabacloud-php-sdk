<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InstallAgentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\InstallAgentResponseBody\executionResultList\executionResult;

class executionResultList extends Model
{
    /**
     * @var executionResult[]
     */
    public $executionResult;
    protected $_name = [
        'executionResult' => 'ExecutionResult',
    ];

    public function validate()
    {
        if (\is_array($this->executionResult)) {
            Model::validateArray($this->executionResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executionResult) {
            if (\is_array($this->executionResult)) {
                $res['ExecutionResult'] = [];
                $n1 = 0;
                foreach ($this->executionResult as $item1) {
                    $res['ExecutionResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ExecutionResult'])) {
            if (!empty($map['ExecutionResult'])) {
                $model->executionResult = [];
                $n1 = 0;
                foreach ($map['ExecutionResult'] as $item1) {
                    $model->executionResult[$n1] = executionResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
