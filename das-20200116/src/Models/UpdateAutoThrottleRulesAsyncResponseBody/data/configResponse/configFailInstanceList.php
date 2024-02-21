<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoThrottleRulesAsyncResponseBody\data\configResponse;

use AlibabaCloud\Tea\Model;

class configFailInstanceList extends Model
{
    /**
     * @description Indicates whether the parameters are configured. Valid values:
     *
     * **true**
     *
     * **false**
     *
     * @example false
     *
     * @var bool
     */
    public $configSuccess;

    /**
     * @description The error message returned.
     *
     * @example instance das autonomy service is off or can not find instance
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The database instance ID.
     *
     * @example rm-2ze9xrhze0709****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'configSuccess' => 'ConfigSuccess',
        'errorMessage'  => 'ErrorMessage',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configFailInstanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigSuccess'])) {
            $model->configSuccess = $map['ConfigSuccess'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
