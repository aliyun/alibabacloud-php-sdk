<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\CreateDiagnosticReportResponseBody\commandInvokeResults;

use AlibabaCloud\Tea\Model;

class invokeResult extends Model
{
    /**
     * @var string
     */
    public $commandName;

    /**
     * @var string
     */
    public $dataFileDir;

    /**
     * @var string
     */
    public $invokeResult;
    protected $_name = [
        'commandName'  => 'CommandName',
        'dataFileDir'  => 'DataFileDir',
        'invokeResult' => 'InvokeResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandName) {
            $res['CommandName'] = $this->commandName;
        }
        if (null !== $this->dataFileDir) {
            $res['DataFileDir'] = $this->dataFileDir;
        }
        if (null !== $this->invokeResult) {
            $res['InvokeResult'] = $this->invokeResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invokeResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandName'])) {
            $model->commandName = $map['CommandName'];
        }
        if (isset($map['DataFileDir'])) {
            $model->dataFileDir = $map['DataFileDir'];
        }
        if (isset($map['InvokeResult'])) {
            $model->invokeResult = $map['InvokeResult'];
        }

        return $model;
    }
}
