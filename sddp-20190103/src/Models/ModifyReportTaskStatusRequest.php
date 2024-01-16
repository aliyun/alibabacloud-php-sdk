<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class ModifyReportTaskStatusRequest extends Model
{
    /**
     * @description This parameter is deprecated.
     *
     * @example 1
     *
     * @var int
     */
    public $featureType;

    /**
     * @description The language of the content within the request and response. Default value: **zh_cn**. Valid values:
     *
     *   **zh_cn**: Simplified Chinese
     *   **en_us**: English
     *
     * @example zh_cn
     *
     * @var string
     */
    public $lang;

    /**
     * @description Specifies the status of the report task. Valid values:
     *
     *   **0**: disabled
     *   **1**: enabled
     *
     * > This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $reportTaskStatus;
    protected $_name = [
        'featureType'      => 'FeatureType',
        'lang'             => 'Lang',
        'reportTaskStatus' => 'ReportTaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->reportTaskStatus) {
            $res['ReportTaskStatus'] = $this->reportTaskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyReportTaskStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ReportTaskStatus'])) {
            $model->reportTaskStatus = $map['ReportTaskStatus'];
        }

        return $model;
    }
}
