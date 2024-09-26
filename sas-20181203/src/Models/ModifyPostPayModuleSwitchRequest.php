<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyPostPayModuleSwitchRequest extends Model
{
    /**
     * @description The ID of the pay-as-you-go instance. This parameter is required.
     *
     * >  You can call the [DescribeVersionConfig](~DescribeVersionConfig~) operation to obtain the ID.
     * @example postpay-sas-**
     *
     * @var string
     */
    public $postPayInstanceId;

    /**
     * @description The switch status of the pay-as-you-go module. The value is a JSON string. Valid values:
     *
     *   Key:
     *
     *   **VUL**: vulnerability fixing module
     *   **CSPM**: cloud service configuration check module
     *   **AGENTLESS**: agentless detection module
     *   **SERVERLESS**: serverless asset module
     *
     *   Value: A value of 0 specifies disabled. A value of 1 specifies enabled.
     *
     * >  If you do not specify a value for a module, the original value of the module is retained.
     * @example {"VUL":1,"CSPM":0}
     *
     * @var string
     */
    public $postPayModuleSwitch;
    protected $_name = [
        'postPayInstanceId'   => 'PostPayInstanceId',
        'postPayModuleSwitch' => 'PostPayModuleSwitch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->postPayInstanceId) {
            $res['PostPayInstanceId'] = $this->postPayInstanceId;
        }
        if (null !== $this->postPayModuleSwitch) {
            $res['PostPayModuleSwitch'] = $this->postPayModuleSwitch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPostPayModuleSwitchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PostPayInstanceId'])) {
            $model->postPayInstanceId = $map['PostPayInstanceId'];
        }
        if (isset($map['PostPayModuleSwitch'])) {
            $model->postPayModuleSwitch = $map['PostPayModuleSwitch'];
        }

        return $model;
    }
}
