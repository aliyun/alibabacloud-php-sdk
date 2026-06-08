<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProcessDefinitionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListProcessDefinitionsResponseBody\pagingInfo\processDefinitions;

class pagingInfo extends Model
{
    /**
     * @var processDefinitions[]
     */
    public $processDefinitions;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'processDefinitions' => 'ProcessDefinitions',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->processDefinitions)) {
            Model::validateArray($this->processDefinitions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processDefinitions) {
            if (\is_array($this->processDefinitions)) {
                $res['ProcessDefinitions'] = [];
                $n1 = 0;
                foreach ($this->processDefinitions as $item1) {
                    $res['ProcessDefinitions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ProcessDefinitions'])) {
            if (!empty($map['ProcessDefinitions'])) {
                $model->processDefinitions = [];
                $n1 = 0;
                foreach ($map['ProcessDefinitions'] as $item1) {
                    $model->processDefinitions[$n1] = processDefinitions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
