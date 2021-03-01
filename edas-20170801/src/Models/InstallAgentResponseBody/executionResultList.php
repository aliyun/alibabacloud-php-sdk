<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InstallAgentResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\InstallAgentResponseBody\executionResultList\executionResult;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionResult) {
            $res['ExecutionResult'] = [];
            if (null !== $this->executionResult && \is_array($this->executionResult)) {
                $n = 0;
                foreach ($this->executionResult as $item) {
                    $res['ExecutionResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executionResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionResult'])) {
            if (!empty($map['ExecutionResult'])) {
                $model->executionResult = [];
                $n                      = 0;
                foreach ($map['ExecutionResult'] as $item) {
                    $model->executionResult[$n++] = null !== $item ? executionResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
