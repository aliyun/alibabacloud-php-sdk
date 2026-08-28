<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models\GetPatrolConfigResponseBody\data;

use AlibabaCloud\Dara\Model;

class scopeConfig extends Model
{
    /**
     * @var string[]
     */
    public $deploymentIds;

    /**
     * @var string[][]
     */
    public $tags;
    protected $_name = [
        'deploymentIds' => 'deploymentIds',
        'tags' => 'tags',
    ];

    public function validate()
    {
        if (\is_array($this->deploymentIds)) {
            Model::validateArray($this->deploymentIds);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentIds) {
            if (\is_array($this->deploymentIds)) {
                $res['deploymentIds'] = [];
                $n1 = 0;
                foreach ($this->deploymentIds as $item1) {
                    $res['deploymentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['tags'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['tags'][$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
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
        if (isset($map['deploymentIds'])) {
            if (!empty($map['deploymentIds'])) {
                $model->deploymentIds = [];
                $n1 = 0;
                foreach ($map['deploymentIds'] as $item1) {
                    $model->deploymentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                foreach ($map['tags'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->tags[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->tags[$key1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}
