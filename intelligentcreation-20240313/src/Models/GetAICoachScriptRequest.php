<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class GetAICoachScriptRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $scriptRecordId;
    protected $_name = [
        'scriptRecordId' => 'scriptRecordId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scriptRecordId) {
            $res['scriptRecordId'] = $this->scriptRecordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAICoachScriptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['scriptRecordId'])) {
            $model->scriptRecordId = $map['scriptRecordId'];
        }

        return $model;
    }
}
