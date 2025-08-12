<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponseBody\unhealthyList\nodeTaskInstance;

class unhealthyList extends Model
{
    /**
     * @var nodeTaskInstance[]
     */
    public $nodeTaskInstance;
    protected $_name = [
        'nodeTaskInstance' => 'NodeTaskInstance',
    ];

    public function validate()
    {
        if (\is_array($this->nodeTaskInstance)) {
            Model::validateArray($this->nodeTaskInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeTaskInstance) {
            if (\is_array($this->nodeTaskInstance)) {
                $res['NodeTaskInstance'] = [];
                $n1 = 0;
                foreach ($this->nodeTaskInstance as $item1) {
                    $res['NodeTaskInstance'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NodeTaskInstance'])) {
            if (!empty($map['NodeTaskInstance'])) {
                $model->nodeTaskInstance = [];
                $n1 = 0;
                foreach ($map['NodeTaskInstance'] as $item1) {
                    $model->nodeTaskInstance[$n1] = nodeTaskInstance::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
