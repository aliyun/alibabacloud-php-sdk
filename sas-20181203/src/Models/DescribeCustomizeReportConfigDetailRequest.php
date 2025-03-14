<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomizeReportConfigDetailRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The ID of the report.\\
     * You can call the [DescribeCustomizeReportList](https://help.aliyun.com/document_detail/271655.html) operation to query the ID.
     *
     * This parameter is required.
     *
     * @example 619031
     *
     * @var int
     */
    public $reportId;

    /**
     * @description The source IP address of the request.
     *
     * @example 202.104.XXX.XXX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'lang' => 'Lang',
        'reportId' => 'ReportId',
        'sourceIp' => 'SourceIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomizeReportConfigDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
