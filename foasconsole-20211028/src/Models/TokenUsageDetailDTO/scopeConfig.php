<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\TokenUsageDetailDTO;

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
        'deploymentIds' => 'DeploymentIds',
        'tags' => 'Tags',
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
                $res['DeploymentIds'] = [];
                $n1 = 0;
                foreach ($this->deploymentIds as $item1) {
                    $res['DeploymentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['Tags'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['Tags'][$key1][$n2] = $item2;
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
        if (isset($map['DeploymentIds'])) {
            if (!empty($map['DeploymentIds'])) {
                $model->deploymentIds = [];
                $n1 = 0;
                foreach ($map['DeploymentIds'] as $item1) {
                    $model->deploymentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
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
