<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\TaskConfigListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20180308\Models\TaskConfigListResponseBody\taskList\nodeTaskConfig;

class taskList extends Model
{
    /**
     * @var nodeTaskConfig[]
     */
    public $nodeTaskConfig;
    protected $_name = [
        'nodeTaskConfig' => 'NodeTaskConfig',
    ];

    public function validate()
    {
        if (\is_array($this->nodeTaskConfig)) {
            Model::validateArray($this->nodeTaskConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeTaskConfig) {
            if (\is_array($this->nodeTaskConfig)) {
                $res['NodeTaskConfig'] = [];
                $n1 = 0;
                foreach ($this->nodeTaskConfig as $item1) {
                    $res['NodeTaskConfig'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NodeTaskConfig'])) {
            if (!empty($map['NodeTaskConfig'])) {
                $model->nodeTaskConfig = [];
                $n1 = 0;
                foreach ($map['NodeTaskConfig'] as $item1) {
                    $model->nodeTaskConfig[$n1++] = nodeTaskConfig::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
