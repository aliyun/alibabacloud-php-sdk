<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody\securityEventOperationsResponse\mappingMarkFields;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody\securityEventOperationsResponse\markField;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody\securityEventOperationsResponse\markFieldsSource;
use AlibabaCloud\Tea\Model;

class securityEventOperationsResponse extends Model
{
    /**
     * @description The objects on which the operations are performed. This parameter is required when you add the alert to the whitelist by configuring precise defense rules.
     *
     * @var mappingMarkFields[]
     */
    public $mappingMarkFields;

    /**
     * @description The configurations that are used when the value of the OperationCode parameter is **advance_mark_mis_info**.
     *
     * @var markField[]
     */
    public $markField;

    /**
     * @description The configuration items that can be used when the value of the OperationCode parameter is advance_mark_mis_info.
     *
     * @var markFieldsSource[]
     */
    public $markFieldsSource;

    /**
     * @description The operation that is performed to handle the alert. Valid values:
     *
     *   **block_ip**: blocks the source IP address.
     *   **advance_mark_mis_info**: adds the alert to the whitelist.
     *   **ignore**: ignores the alert.
     *   **manual_handled**: marks the alert as manually handled.
     *   **kill_process**: terminates the malicious process.
     *   **cleanup**: performs in-depth virus detection and removal.
     *   **kill_and_quara**: terminates the malicious process and quarantines the source file.
     *   **disable_malicious_defense**: disables the malicious behavior defense feature.
     *   **client_problem_check**: performs troubleshooting.
     *   **quara**: quarantines the source file of the malicious process.
     *   **defense_mark_mis_info**: enables the precise defense feature but disables the notification feature.
     *   **rm_defense_mark_mis_info**: enables the notification feature.
     *   **rm_mark_mis_info**: removes the alert from the whitelist.
     *   **cancle_manual**: cancels marking the alert as manually handled.
     *
     * @example advance_mark_mis_info
     *
     * @var string
     */
    public $operationCode;

    /**
     * @description The configuration of the operation that is performed to handle the alert.
     *
     * >  If the value of the **OperationCode** parameter is **kill_and_quara** or **block_ip**, the OperationParams parameter is required. If the value of the **OperationCode** parameter is a different value, the OperationParams parameter can be left empty.
     *
     * @example {"expireTime":1641566807783}
     *
     * @var string
     */
    public $operationParams;

    /**
     * @description Indicates whether you can handle the alert in the current edition of Security Center. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $userCanOperate;
    protected $_name = [
        'mappingMarkFields' => 'MappingMarkFields',
        'markField' => 'MarkField',
        'markFieldsSource' => 'MarkFieldsSource',
        'operationCode' => 'OperationCode',
        'operationParams' => 'OperationParams',
        'userCanOperate' => 'UserCanOperate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mappingMarkFields) {
            $res['MappingMarkFields'] = [];
            if (null !== $this->mappingMarkFields && \is_array($this->mappingMarkFields)) {
                $n = 0;
                foreach ($this->mappingMarkFields as $item) {
                    $res['MappingMarkFields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->markField) {
            $res['MarkField'] = [];
            if (null !== $this->markField && \is_array($this->markField)) {
                $n = 0;
                foreach ($this->markField as $item) {
                    $res['MarkField'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->markFieldsSource) {
            $res['MarkFieldsSource'] = [];
            if (null !== $this->markFieldsSource && \is_array($this->markFieldsSource)) {
                $n = 0;
                foreach ($this->markFieldsSource as $item) {
                    $res['MarkFieldsSource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
     * @return securityEventOperationsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MappingMarkFields'])) {
            if (!empty($map['MappingMarkFields'])) {
                $model->mappingMarkFields = [];
                $n = 0;
                foreach ($map['MappingMarkFields'] as $item) {
                    $model->mappingMarkFields[$n++] = null !== $item ? mappingMarkFields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MarkField'])) {
            if (!empty($map['MarkField'])) {
                $model->markField = [];
                $n = 0;
                foreach ($map['MarkField'] as $item) {
                    $model->markField[$n++] = null !== $item ? markField::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MarkFieldsSource'])) {
            if (!empty($map['MarkFieldsSource'])) {
                $model->markFieldsSource = [];
                $n = 0;
                foreach ($map['MarkFieldsSource'] as $item) {
                    $model->markFieldsSource[$n++] = null !== $item ? markFieldsSource::fromMap($item) : $item;
                }
            }
        }
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
