<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DescribeExportProgressResponseBody extends Model
{
    /**
     * @var string
     */
    public $fileHttpUrl;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'fileHttpUrl' => 'FileHttpUrl',
        'requestId'   => 'RequestId',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileHttpUrl) {
            $res['FileHttpUrl'] = $this->fileHttpUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExportProgressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileHttpUrl'])) {
            $model->fileHttpUrl = $map['FileHttpUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
