<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSecurityEventOperationsResponseBody;

use AlibabaCloud\Tea\Model;

class securityEventOperations extends Model
{
    /**
     * @description The code of the operation performed on the alert. Valid values:
     *
     *   mark_mis_info: adds the alert to the whitelist without configuring rules. This operation is triggered by adding multiple alerts to the whitelist at a time.
     *   advance_mark_mis_inf: adds the alert to the whitelist by configuring advanced rules.
     *   defense_mark_mis_info: adds the alert to the whitelist by configuring precise defense rules.
     *   rm_mark_mis_info: removes the alert from the whitelist.
     *   rm_defense_mark_mis_info: removes the alert from the whitelist configured with precise defense rules.
     *   manual_handled: manually handles the alert.
     *   ignore: ignores the alert.
     *   quara: quarantines the source file of the malicious process.
     *   block_ip: blocks access from the source IP address.
     *   kill_and_quara: terminates the malicious process and quarantines the source file.
     *
     * @example ignore
     *
     * @var string
     */
    public $operationCode;

    /**
     * @description The parameters of the operation.
     *
     * @example qqqqq
     *
     * @var string
     */
    public $operationParams;

    /**
     * @description Indicates whether the alert can be handled. Valid values:
     *
     *   true: The alert can be handled.
     *   false: The alert cannot be handled.
     *
     * @example true
     *
     * @var bool
     */
    public $userCanOperate;
    protected $_name = [
        'operationCode'   => 'OperationCode',
        'operationParams' => 'OperationParams',
        'userCanOperate'  => 'UserCanOperate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
        }
        if (null !== $this->operationParams) {
            $res['OperationParams'] = $this->operationParams;
        }
        if (null !== $this->userCanOperate) {
            $res['UserCanOperate'] = $this->userCanOperate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityEventOperations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }
        if (isset($map['OperationParams'])) {
            $model->operationParams = $map['OperationParams'];
        }
        if (isset($map['UserCanOperate'])) {
            $model->userCanOperate = $map['UserCanOperate'];
        }

        return $model;
    }
}
