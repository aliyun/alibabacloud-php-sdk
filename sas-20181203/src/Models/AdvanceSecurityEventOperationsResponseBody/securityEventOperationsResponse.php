<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AdvanceSecurityEventOperationsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\AdvanceSecurityEventOperationsResponseBody\securityEventOperationsResponse\markField;
use AlibabaCloud\SDK\Sas\V20181203\Models\AdvanceSecurityEventOperationsResponseBody\securityEventOperationsResponse\markFieldsSource;
use AlibabaCloud\Tea\Model;

class securityEventOperationsResponse extends Model
{
    /**
     * @description The object on which the operation is performed. This parameter is required when you set the OperationCode parameter to **advance_mark_mis_info**.
     *
     * @var markField[]
     */
    public $markField;

    /**
     * @description The metadata configuration returned by the advanced whitelist rule.
     *
     * @var markFieldsSource[]
     */
    public $markFieldsSource;

    /**
     * @description The operation performed to handle the alert. Valid values:
     *
     *   **block_ip**: blocks the alert.
     *   **advance_mark_mis_info**: adds the alert to the whitelist.
     *   **ignore**: ignores the alert.
     *   **manual_handled**: marks the alert as manually handled.
     *   **kill_process**: terminates the malicious process.
     *   **cleanup**: performs in-depth virus detection and removal.
     *   **kill_and_quara**: performs virus detection and removal.
     *   **disable_malicious_defense**: turns off malicious defense behavior.
     *   **client_problem_check**: performs troubleshooting.
     *   **quara**: performs quarantine operations.
     *
     * @example advance_mark_mis_info
     *
     * @var string
     */
    public $operationCode;

    /**
     * @description The configuration of the operation performed to handle the alert event.
     *
     * @example {\\"subOperation\\":\\"killByMd5andPath\\"}
     *
     * @var string
     */
    public $operationParams;

    /**
     * @description Indicates whether the operation can be performed.
     *
     *   **true**: The operation can be performed.
     *   **false**: The operation cannot be performed.
     *
     * @example false
     *
     * @var bool
     */
    public $userCanOperate;
    protected $_name = [
        'markField'        => 'MarkField',
        'markFieldsSource' => 'MarkFieldsSource',
        'operationCode'    => 'OperationCode',
        'operationParams'  => 'OperationParams',
        'userCanOperate'   => 'UserCanOperate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['MarkField'])) {
            if (!empty($map['MarkField'])) {
                $model->markField = [];
                $n                = 0;
                foreach ($map['MarkField'] as $item) {
                    $model->markField[$n++] = null !== $item ? markField::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MarkFieldsSource'])) {
            if (!empty($map['MarkFieldsSource'])) {
                $model->markFieldsSource = [];
                $n                       = 0;
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
