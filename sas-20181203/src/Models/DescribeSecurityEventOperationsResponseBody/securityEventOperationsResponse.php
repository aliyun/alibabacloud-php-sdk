<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody\securityEventOperationsResponse\markField;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityEventOperationsResponseBody\securityEventOperationsResponse\markFieldsSource;
use AlibabaCloud\Tea\Model;

class securityEventOperationsResponse extends Model
{
    /**
     * @description The source IP address of the request.
     *
     * @var markField[]
     */
    public $markField;

    /**
     * @description 192.168.XX.XX
     *
     * @var markFieldsSource[]
     */
    public $markFieldsSource;

    /**
     * @description The operation that you can perform to handle the alert. Valid values:
     *
     *   **block_ip**: blocks the source IP address.
     *   **advance_mark_mis_info**: adds the alert to the whitelist.
     *   **ignore**: ignores the alert.
     *   **manual_handled**: marks the alert as manually handled.
     *   **kill_process**: terminates the malicious process.
     *   **cleanup**: performs in-depth virus detection and removal.
     *   **kill_and_quara**: terminates the malicious process and quarantines the source file.
     *   **disable_malicious_defense**: stops the container on which the alerting files or processes exist.
     *   **client_problem_check**: performs troubleshooting.
     *   **quara**: quarantines the source file of the malicious process.
     *
     * @example advance_mark_mis_info
     *
     * @var string
     */
    public $operationCode;

    /**
     * @description Indicates whether you can handle the alert event in the current edition of Security Center. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example {"expireTime":1641566807783}
     *
     * @var string
     */
    public $operationParams;

    /**
     * @description The UUID of the server on which the alert event is detected.
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
