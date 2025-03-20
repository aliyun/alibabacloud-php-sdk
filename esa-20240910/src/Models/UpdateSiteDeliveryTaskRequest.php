<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateSiteDeliveryTaskRequest extends Model
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
     * @description The discard rate.
     *
     * @example 0.0
     *
     * @var float
     */
    public $discardRate;

    /**
     * @description The log fields that you want to include in real-time logs to be delivered. Separate the log fields with commas (,).
     *
     * This parameter is required.
     *
     * @example ClientIP,UserAgent
     *
     * @var string
     */
    public $fieldName;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The name of the delivery task.
     *
     * This parameter is required.
     *
     * @example cdn-test-task
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'businessType' => 'BusinessType',
        'discardRate' => 'DiscardRate',
        'fieldName' => 'FieldName',
        'siteId' => 'SiteId',
        'taskName' => 'TaskName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->discardRate) {
            $res['DiscardRate'] = $this->discardRate;
        }
        if (null !== $this->fieldName) {
            $res['FieldName'] = $this->fieldName;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSiteDeliveryTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['DiscardRate'])) {
            $model->discardRate = $map['DiscardRate'];
        }
        if (isset($map['FieldName'])) {
            $model->fieldName = $map['FieldName'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
