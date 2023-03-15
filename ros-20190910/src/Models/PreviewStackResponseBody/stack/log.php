<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody\stack;

use AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody\stack\log\terraformLogs;
use AlibabaCloud\Tea\Model;

class log extends Model
{
    /**
     * @description The log that is generated when a Terraform stack is run. This parameter is returned only if the stack is a Terraform stack.
     *
     * >  You can use this parameter to preview the logs of a Terraform stack.
     * @var terraformLogs[]
     */
    public $terraformLogs;
    protected $_name = [
        'terraformLogs' => 'TerraformLogs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->terraformLogs) {
            $res['TerraformLogs'] = [];
            if (null !== $this->terraformLogs && \is_array($this->terraformLogs)) {
                $n = 0;
                foreach ($this->terraformLogs as $item) {
                    $res['TerraformLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return log
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TerraformLogs'])) {
            if (!empty($map['TerraformLogs'])) {
                $model->terraformLogs = [];
                $n                    = 0;
                foreach ($map['TerraformLogs'] as $item) {
                    $model->terraformLogs[$n++] = null !== $item ? terraformLogs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
