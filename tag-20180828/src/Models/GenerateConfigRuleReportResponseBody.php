<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Tea\Model;

class GenerateConfigRuleReportResponseBody extends Model
{
    /**
     * @description The ID of the resource non-compliance report.
     *
     * @example crp-ao0786618088006c****
     *
     * @var string
     */
    public $reportId;

    /**
     * @description The ID of the request.
     *
     * @example 37B2AC06-89D8-5D95-98DF-3E68C12BDE05
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'reportId'  => 'ReportId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateConfigRuleReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
