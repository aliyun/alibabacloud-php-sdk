<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models;

use AlibabaCloud\SDK\Cloudauthconsole\V20190219\Models\DescribeExcelAnalysisResultResponseBody\excelResult;
use AlibabaCloud\Tea\Model;

class DescribeExcelAnalysisResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var excelResult
     */
    public $excelResult;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'      => 'RequestId',
        'excelResult'    => 'ExcelResult',
        'httpStatusCode' => 'HttpStatusCode',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->excelResult) {
            $res['ExcelResult'] = null !== $this->excelResult ? $this->excelResult->toMap() : null;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExcelAnalysisResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExcelResult'])) {
            $model->excelResult = excelResult::fromMap($map['ExcelResult']);
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
