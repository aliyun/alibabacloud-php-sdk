<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class CreateEvaluateDataImportPreCheckTaskRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $importParam;
    protected $_name = [
        'importParam' => 'ImportParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->importParam) {
            $res['ImportParam'] = $this->importParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEvaluateDataImportPreCheckTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImportParam'])) {
            $model->importParam = $map['ImportParam'];
        }

        return $model;
    }
}
