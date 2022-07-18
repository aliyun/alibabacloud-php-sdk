<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class ReportStressResponseBody extends Model
{
    /**
     * @var string
     */
    public $reportUrl;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'reportUrl' => 'ReportUrl',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportUrl) {
            $res['ReportUrl'] = $this->reportUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportStressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportUrl'])) {
            $model->reportUrl = $map['ReportUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
