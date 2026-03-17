<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DiscribeSmartAccessGatewayDiagnosisReportResponseBody\diagnoseResult;

class DiscribeSmartAccessGatewayDiagnosisReportResponseBody extends Model
{
    /**
     * @var diagnoseResult
     */
    public $diagnoseResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'diagnoseResult' => 'DiagnoseResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->diagnoseResult) {
            $this->diagnoseResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diagnoseResult) {
            $res['DiagnoseResult'] = null !== $this->diagnoseResult ? $this->diagnoseResult->toArray($noStream) : $this->diagnoseResult;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnoseResult'])) {
            $model->diagnoseResult = diagnoseResult::fromMap($map['DiagnoseResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
