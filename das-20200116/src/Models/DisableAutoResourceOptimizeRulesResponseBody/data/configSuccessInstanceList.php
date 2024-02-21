<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DisableAutoResourceOptimizeRulesResponseBody\data;

use AlibabaCloud\Tea\Model;

class configSuccessInstanceList extends Model
{
    /**
     * @description Indicates whether the automatic tablespace fragment recycling feature is disabled. Valid values:
     *
     * **true**
     *
     * **false**
     *
     * @example true
     *
     * @var bool
     */
    public $configSuccess;

    /**
     * @description The database instance ID.
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'configSuccess' => 'ConfigSuccess',
        'instanceId'    => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configSuccess) {
            $res['ConfigSuccess'] = $this->configSuccess;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configSuccessInstanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigSuccess'])) {
            $model->configSuccess = $map['ConfigSuccess'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
