<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailResponseBody\dataExportOrderDetail;

use AlibabaCloud\Tea\Model;

class keyInfo extends Model
{
    /**
     * @description Export task ID.
     *
     * @example 1385****
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The state of the data export ticket. Valid values:
     *
     *   **PRE_CHECKING**: The ticket was being prechecked.
     *   **PRE_CHECK_SUCCESS**: The ticket passed the precheck.
     *   **PRE_CHECK_FAIL**: The ticket failed to pass the prechecked.
     *   **WAITING_APPLY_AUDIT**: The ticket was to be submitted for approval.
     *   **APPLY_AUDIT_SUCCESS**: The ticket was submitted for approval.
     *   **ENABLE_EXPORT**: The ticket was approved. Data can be exported.
     *   **WAITING_EXPORT**: Data was to be scheduled for export.
     *   **DOING_EXPORT**: Data was being exported.
     *   **EXPORT_FAIL**: Data failed to be exported.
     *   **EXPORT_SUCCESS**: Data was exported.
     *
     * @example EXPORT_SUCCESS
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @description The precheck ID.
     *
     * @example 123
     *
     * @var int
     */
    public $preCheckId;
    protected $_name = [
        'jobId' => 'JobId',
        'jobStatus' => 'JobStatus',
        'preCheckId' => 'PreCheckId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->preCheckId) {
            $res['PreCheckId'] = $this->preCheckId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['PreCheckId'])) {
            $model->preCheckId = $map['PreCheckId'];
        }

        return $model;
    }
}
