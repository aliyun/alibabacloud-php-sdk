<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserDeliveryTaskRequest extends Model
{
    /**
     * @description The log category. Valid values:
     *
     *   dcdn_log_access_l1 (default): access logs.
     *   dcdn_log_er: Edge Routine logs.
     *   dcdn_log_waf: firewall logs.
     *   dcdn_log_ipa: TCP/UDP proxy logs.
     *
     * @example dcdn_log_er
     *
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $details;

    /**
     * @description The discard rate. Default value: 0.
     *
     * @example 0
     *
     * @var float
     */
    public $discardRate;

    /**
     * @description The log fields that you want to include in logs to be delivered. Separate the log fields with commas (,).
     *
     * This parameter is required.
     *
     * @example ClientRequestID,ClientRequestHost
     *
     * @var string
     */
    public $fieldName;

    /**
     * @description The name of the delivery task.
     *
     * This parameter is required.
     *
     * @example test_project
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'businessType' => 'BusinessType',
        'details' => 'Details',
        'discardRate' => 'DiscardRate',
        'fieldName' => 'FieldName',
        'taskName' => 'TaskName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }
        if (null !== $this->discardRate) {
            $res['DiscardRate'] = $this->discardRate;
        }
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserDeliveryTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }
        if (isset($map['DiscardRate'])) {
            $model->discardRate = $map['DiscardRate'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
