<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomDataExportTaskRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $exportParam;
    protected $_name = [
        'exportParam' => 'ExportParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportParam) {
            $res['ExportParam'] = $this->exportParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomDataExportTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportParam'])) {
            $model->exportParam = $map['ExportParam'];
        }

        return $model;
    }
}
