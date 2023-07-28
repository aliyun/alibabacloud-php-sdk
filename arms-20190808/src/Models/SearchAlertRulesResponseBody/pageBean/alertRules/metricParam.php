<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchAlertRulesResponseBody\pageBean\alertRules\metricParam\dimensions;
use AlibabaCloud\Tea\Model;

class metricParam extends Model
{
    /**
     * @description The ID of the application group that is associated with the alert rule. This parameter is applicable to Enterprise Distributed Application Service (EDAS) applications.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $appGroupId;

    /**
     * @description The auto-increment ID of the ARMS application. You can ignore this ID.
     *
     * @example 123
     *
     * @var string
     */
    public $appId;

    /**
     * @description The dimensions in the condition.
     *
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @description The PID of the application that is associated with the alert rule.
     *
     * @example 9870ca99-8105-4da7-a3a4-d72dd1b1****
     *
     * @var string
     */
    public $pid;

    /**
     * @description The type of the metric. Valid values:
     *
     *   `txn`: the number of API calls during application monitoring
     *   `txn_type`: the types of API calls during application monitoring
     *   `db`: database metrics
     *   `jvm`: Java virtual machine (JVM) metrics
     *   `host`: host metrics
     *   `exception`: API call errors
     *
     * @example DB
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appGroupId' => 'AppGroupId',
        'appId'      => 'AppId',
        'dimensions' => 'Dimensions',
        'pid'        => 'Pid',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGroupId) {
            $res['AppGroupId'] = $this->appGroupId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGroupId'])) {
            $model->appGroupId = $map['AppGroupId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
