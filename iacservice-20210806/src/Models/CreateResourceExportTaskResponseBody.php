<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class CreateResourceExportTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $exportTaskId;

    /**
     * @var string
     */
    public $exportVersion;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exportTaskId'  => 'exportTaskId',
        'exportVersion' => 'exportVersion',
        'requestId'     => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportTaskId) {
            $res['exportTaskId'] = $this->exportTaskId;
        }
        if (null !== $this->exportVersion) {
            $res['exportVersion'] = $this->exportVersion;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceExportTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['exportTaskId'])) {
            $model->exportTaskId = $map['exportTaskId'];
        }
        if (isset($map['exportVersion'])) {
            $model->exportVersion = $map['exportVersion'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
