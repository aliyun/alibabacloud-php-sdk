<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class GetReportResponseResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $outRequestNo;

    /**
     * @var string
     */
    public $reportUrl;
    protected $_name = [
        'errorCode' => 'errorCode',
        'errorMessage' => 'errorMessage',
        'outRequestNo' => 'outRequestNo',
        'reportUrl' => 'reportUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->outRequestNo) {
            $res['outRequestNo'] = $this->outRequestNo;
        }

        if (null !== $this->reportUrl) {
            $res['reportUrl'] = $this->reportUrl;
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
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['outRequestNo'])) {
            $model->outRequestNo = $map['outRequestNo'];
        }

        if (isset($map['reportUrl'])) {
            $model->reportUrl = $map['reportUrl'];
        }

        return $model;
    }
}
