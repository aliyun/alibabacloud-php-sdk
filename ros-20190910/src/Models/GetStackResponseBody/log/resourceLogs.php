<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\log;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackResponseBody\log\resourceLogs\logs;
use AlibabaCloud\Tea\Model;

class resourceLogs extends Model
{
    /**
     * @description The logs of all resources.
     *
     * @var logs[]
     */
    public $logs;

    /**
     * @description The name of the resource that is defined in the template.
     *
     * @example MyResourceCleaner
     *
     * @var string
     */
    public $resourceName;
    protected $_name = [
        'logs'         => 'Logs',
        'resourceName' => 'ResourceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logs) {
            $res['Logs'] = [];
            if (null !== $this->logs && \is_array($this->logs)) {
                $n = 0;
                foreach ($this->logs as $item) {
                    $res['Logs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Logs'])) {
            if (!empty($map['Logs'])) {
                $model->logs = [];
                $n           = 0;
                foreach ($map['Logs'] as $item) {
                    $model->logs[$n++] = null !== $item ? logs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        return $model;
    }
}
