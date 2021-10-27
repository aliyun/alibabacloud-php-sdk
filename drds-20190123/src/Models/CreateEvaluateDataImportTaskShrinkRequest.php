<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class CreateEvaluateDataImportTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $importParamShrink;
    protected $_name = [
        'importParamShrink' => 'ImportParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->importParamShrink) {
            $res['ImportParam'] = $this->importParamShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEvaluateDataImportTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImportParam'])) {
            $model->importParamShrink = $map['ImportParam'];
        }

        return $model;
    }
}
