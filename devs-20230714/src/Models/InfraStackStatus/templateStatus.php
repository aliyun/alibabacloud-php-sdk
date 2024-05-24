<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\InfraStackStatus;

use AlibabaCloud\SDK\Devs\V20230714\Models\TerraformInputVariable;
use AlibabaCloud\SDK\Devs\V20230714\Models\TerraformOutputValue;
use AlibabaCloud\Tea\Model;

class templateStatus extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var TerraformOutputValue[]
     */
    public $outputs;

    /**
     * @description This parameter is required.
     *
     * @var TerraformInputVariable[]
     */
    public $variables;
    protected $_name = [
        'outputs'   => 'outputs',
        'variables' => 'variables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputs) {
            $res['outputs'] = [];
            if (null !== $this->outputs && \is_array($this->outputs)) {
                $n = 0;
                foreach ($this->outputs as $item) {
                    $res['outputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->variables) {
            $res['variables'] = [];
            if (null !== $this->variables && \is_array($this->variables)) {
                $n = 0;
                foreach ($this->variables as $item) {
                    $res['variables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['outputs'])) {
            if (!empty($map['outputs'])) {
                $model->outputs = [];
                $n              = 0;
                foreach ($map['outputs'] as $item) {
                    $model->outputs[$n++] = null !== $item ? TerraformOutputValue::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                $n                = 0;
                foreach ($map['variables'] as $item) {
                    $model->variables[$n++] = null !== $item ? TerraformInputVariable::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
