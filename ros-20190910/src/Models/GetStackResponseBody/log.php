<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\log\resourceLogs;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\log\terraformLogs;
use AlibabaCloud\Tea\Model;

class log extends Model
{
    /**
     * @var resourceLogs[]
     */
    public $resourceLogs;

    /**
     * @var terraformLogs[]
     */
    public $terraformLogs;
    protected $_name = [
        'resourceLogs'  => 'ResourceLogs',
        'terraformLogs' => 'TerraformLogs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceLogs) {
            $res['ResourceLogs'] = [];
            if (null !== $this->resourceLogs && \is_array($this->resourceLogs)) {
                $n = 0;
                foreach ($this->resourceLogs as $item) {
                    $res['ResourceLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
        if (isset($map['ResourceLogs'])) {
            if (!empty($map['ResourceLogs'])) {
                $model->resourceLogs = [];
                $n                   = 0;
                foreach ($map['ResourceLogs'] as $item) {
                    $model->resourceLogs[$n++] = null !== $item ? resourceLogs::fromMap($item) : $item;
                }
            }
        }
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
