<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class ExecuteResourceExportTaskResponseBody extends Model
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
        'exportTaskId' => 'exportTaskId',
        'exportVersion' => 'exportVersion',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
