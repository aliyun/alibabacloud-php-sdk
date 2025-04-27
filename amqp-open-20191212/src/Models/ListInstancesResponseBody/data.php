<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListInstancesResponseBody\data\instances;

class data extends Model
{
    /**
     * @var instances[]
     */
    public $instances;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'instances' => 'Instances',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['Instances'] = [];
                $n1 = 0;
                foreach ($this->instances as $item1) {
                    $res['Instances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n1 = 0;
                foreach ($map['Instances'] as $item1) {
                    $model->instances[$n1++] = instances::fromMap($item1);
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
