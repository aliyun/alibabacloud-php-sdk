<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\log\resourceLogs;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\log\terraformLogs;

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
        'resourceLogs' => 'ResourceLogs',
        'terraformLogs' => 'TerraformLogs',
    ];

    public function validate()
    {
        if (\is_array($this->resourceLogs)) {
            Model::validateArray($this->resourceLogs);
        }
        if (\is_array($this->terraformLogs)) {
            Model::validateArray($this->terraformLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceLogs) {
            if (\is_array($this->resourceLogs)) {
                $res['ResourceLogs'] = [];
                $n1 = 0;
                foreach ($this->resourceLogs as $item1) {
                    $res['ResourceLogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->terraformLogs) {
            if (\is_array($this->terraformLogs)) {
                $res['TerraformLogs'] = [];
                $n1 = 0;
                foreach ($this->terraformLogs as $item1) {
                    $res['TerraformLogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ResourceLogs'])) {
            if (!empty($map['ResourceLogs'])) {
                $model->resourceLogs = [];
                $n1 = 0;
                foreach ($map['ResourceLogs'] as $item1) {
                    $model->resourceLogs[$n1] = resourceLogs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TerraformLogs'])) {
            if (!empty($map['TerraformLogs'])) {
                $model->terraformLogs = [];
                $n1 = 0;
                foreach ($map['TerraformLogs'] as $item1) {
                    $model->terraformLogs[$n1] = terraformLogs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
