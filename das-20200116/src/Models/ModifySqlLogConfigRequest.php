<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\SDK\DAS\V20200116\Models\ModifySqlLogConfigRequest\filters;
use AlibabaCloud\Tea\Model;

class ModifySqlLogConfigRequest extends Model
{
    /**
     * @description Specifies whether to enable DAS Enterprise Edition. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  This parameter is required if you want to enable DAS Enterprise Edition. By default, the latest version of DAS Enterprise Edition that supports the database instance is enabled.
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description A reserved parameter.
     *
     * @var filters[]
     */
    public $filters;

    /**
     * @description The number of days for which the SQL Explorer and Audit data is stored in hot storage. Valid values: 1 to 7.
     *
     * >  This parameter is required if only DAS Enterprise Edition V3 can be enabled for the database instance.
     * @example 1
     *
     * @var int
     */
    public $hotRetention;

    /**
     * @description The ID of the database instance.
     *
     * This parameter is required.
     * @example rr-2ze770smbq3tpr2o9
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies whether to enable the SQL Explorer feature. Valid values:
     *
     *   **true**
     *   **false**
     *
     * >  This parameter is required if only DAS Enterprise Edition V3 can be enabled for the database instance.
     * @example true
     *
     * @var bool
     */
    public $requestEnable;

    /**
     * @description The total storage duration of the SQL Explorer and Audit data. Unit: day. Valid values:
     *
     *   7
     *   30
     *   180
     *   365
     *
     * >  If you want to enable DAS Enterprise Edition V3, the value of this parameter must be greater than or equal to 30.
     * @example 30
     *
     * @var int
     */
    public $retention;
    protected $_name = [
        'enable'        => 'Enable',
        'filters'       => 'Filters',
        'hotRetention'  => 'HotRetention',
        'instanceId'    => 'InstanceId',
        'requestEnable' => 'RequestEnable',
        'retention'     => 'Retention',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->filters) {
            $res['Filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['Filters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hotRetention) {
            $res['HotRetention'] = $this->hotRetention;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->requestEnable) {
            $res['RequestEnable'] = $this->requestEnable;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySqlLogConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n              = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HotRetention'])) {
            $model->hotRetention = $map['HotRetention'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RequestEnable'])) {
            $model->requestEnable = $map['RequestEnable'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }

        return $model;
    }
}
