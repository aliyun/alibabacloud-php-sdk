<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Dara\Model;

class ExportStatisticalDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $exportTaskId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exportTaskId' => 'ExportTaskId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exportTaskId) {
            $res['ExportTaskId'] = $this->exportTaskId;
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
        if (isset($map['ExportTaskId'])) {
            $model->exportTaskId = $map['ExportTaskId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
