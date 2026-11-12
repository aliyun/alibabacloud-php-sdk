<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\InternetBankOpen\V20240612\Models;

use AlibabaCloud\Dara\Model;

class GetAiReportRequest extends Model
{
    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $reportId;
    protected $_name = [
        'callId' => 'callId',
        'reportId' => 'reportId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callId) {
            $res['callId'] = $this->callId;
        }

        if (null !== $this->reportId) {
            $res['reportId'] = $this->reportId;
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
        if (isset($map['callId'])) {
            $model->callId = $map['callId'];
        }

        if (isset($map['reportId'])) {
            $model->reportId = $map['reportId'];
        }

        return $model;
    }
}
