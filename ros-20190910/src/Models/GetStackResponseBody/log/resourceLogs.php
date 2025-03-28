<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\log;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\log\resourceLogs\logs;

class resourceLogs extends Model
{
    /**
     * @var logs[]
     */
    public $logs;

    /**
     * @var string
     */
    public $resourceName;
    protected $_name = [
        'logs' => 'Logs',
        'resourceName' => 'ResourceName',
    ];

    public function validate()
    {
        if (\is_array($this->logs)) {
            Model::validateArray($this->logs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logs) {
            if (\is_array($this->logs)) {
                $res['Logs'] = [];
                $n1 = 0;
                foreach ($this->logs as $item1) {
                    $res['Logs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
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
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = [];
                $n1 = 0;
                foreach ($map['Logs'] as $item1) {
                    $model->logs[$n1++] = logs::fromMap($item1);
                }
            }
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        return $model;
    }
}
