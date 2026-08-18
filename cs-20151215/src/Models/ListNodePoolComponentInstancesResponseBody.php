<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ListNodePoolComponentInstancesResponseBody\componentInstances;

class ListNodePoolComponentInstancesResponseBody extends Model
{
    /**
     * @var componentInstances[]
     */
    public $componentInstances;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'componentInstances' => 'component_instances',
        'maxResults' => 'max_results',
        'nextToken' => 'next_token',
    ];

    public function validate()
    {
        if (\is_array($this->componentInstances)) {
            Model::validateArray($this->componentInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentInstances) {
            if (\is_array($this->componentInstances)) {
                $res['component_instances'] = [];
                $n1 = 0;
                foreach ($this->componentInstances as $item1) {
                    $res['component_instances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['max_results'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['next_token'] = $this->nextToken;
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
        if (isset($map['component_instances'])) {
            if (!empty($map['component_instances'])) {
                $model->componentInstances = [];
                $n1 = 0;
                foreach ($map['component_instances'] as $item1) {
                    $model->componentInstances[$n1] = componentInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['max_results'])) {
            $model->maxResults = $map['max_results'];
        }

        if (isset($map['next_token'])) {
            $model->nextToken = $map['next_token'];
        }

        return $model;
    }
}
