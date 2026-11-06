<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateExportTaskResponseBody\exportTaskModel;

class CreateExportTaskResponseBody extends Model
{
    /**
     * @var exportTaskModel
     */
    public $exportTaskModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exportTaskModel' => 'ExportTaskModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->exportTaskModel) {
            $this->exportTaskModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exportTaskModel) {
            $res['ExportTaskModel'] = null !== $this->exportTaskModel ? $this->exportTaskModel->toArray($noStream) : $this->exportTaskModel;
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
        if (isset($map['ExportTaskModel'])) {
            $model->exportTaskModel = exportTaskModel::fromMap($map['ExportTaskModel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
