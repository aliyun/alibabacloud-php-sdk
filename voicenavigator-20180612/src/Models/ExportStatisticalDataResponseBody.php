<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class ExportStatisticalDataResponseBody extends Model
{
    /**
     * @example 6be5a9f1-406e-424e-a17b-b6fb86ee3cc9
     *
     * @var string
     */
    public $exportTaskId;

    /**
     * @example c62e6789-28a8-41db-941e-171a01d3b3b9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exportTaskId' => 'ExportTaskId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ExportStatisticalDataResponseBody
     */
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
