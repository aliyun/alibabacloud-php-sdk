<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult;
use AlibabaCloud\Tea\Model;

class DiscribeSmartAccessGatewayDiagnosisReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var diagnoseResult
     */
    public $diagnoseResult;
    protected $_name = [
        'requestId'      => 'RequestId',
        'diagnoseResult' => 'DiagnoseResult',
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
        if (null !== $this->diagnoseResult) {
            $res['DiagnoseResult'] = null !== $this->diagnoseResult ? $this->diagnoseResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DiscribeSmartAccessGatewayDiagnosisReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DiagnoseResult'])) {
            $model->diagnoseResult = diagnoseResult::fromMap($map['DiagnoseResult']);
        }

        return $model;
    }
}
