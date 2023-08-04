<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rdsdata\V20220330\Models;

use AlibabaCloud\Tea\Model;

class BatchExecuteStatementResult extends Model
{
    /**
     * @var Field[][]
     */
    public $generatedFieldsList;
    protected $_name = [
        'generatedFieldsList' => 'GeneratedFieldsList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generatedFieldsList) {
            $res['GeneratedFieldsList'] = $this->generatedFieldsList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchExecuteStatementResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GeneratedFieldsList'])) {
            if (!empty($map['GeneratedFieldsList'])) {
                $model->generatedFieldsList = $map['GeneratedFieldsList'];
            }
        }

        return $model;
    }
}
