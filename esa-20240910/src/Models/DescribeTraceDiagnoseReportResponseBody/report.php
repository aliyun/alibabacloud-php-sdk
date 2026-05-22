<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeTraceDiagnoseReportResponseBody;

use AlibabaCloud\Dara\Model;

class report extends Model
{
    /**
     * @var string
     */
    public $clientInfo;

    /**
     * @var string
     */
    public $diagnoseResult;

    /**
     * @var string
     */
    public $responseHeader;

    /**
     * @var string
     */
    public $staticHtml;
    protected $_name = [
        'clientInfo' => 'ClientInfo',
        'diagnoseResult' => 'DiagnoseResult',
        'responseHeader' => 'ResponseHeader',
        'staticHtml' => 'StaticHtml',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientInfo) {
            $res['ClientInfo'] = $this->clientInfo;
        }

        if (null !== $this->diagnoseResult) {
            $res['DiagnoseResult'] = $this->diagnoseResult;
        }

        if (null !== $this->responseHeader) {
            $res['ResponseHeader'] = $this->responseHeader;
        }

        if (null !== $this->staticHtml) {
            $res['StaticHtml'] = $this->staticHtml;
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
        if (isset($map['ClientInfo'])) {
            $model->clientInfo = $map['ClientInfo'];
        }

        if (isset($map['DiagnoseResult'])) {
            $model->diagnoseResult = $map['DiagnoseResult'];
        }

        if (isset($map['ResponseHeader'])) {
            $model->responseHeader = $map['ResponseHeader'];
        }

        if (isset($map['StaticHtml'])) {
            $model->staticHtml = $map['StaticHtml'];
        }

        return $model;
    }
}
