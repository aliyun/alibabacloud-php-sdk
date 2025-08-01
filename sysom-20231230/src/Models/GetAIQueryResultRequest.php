<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class GetAIQueryResultRequest extends Model
{
    /**
     * @example 16896fa8-37f6-4c70-bb32-67fa9817d426
     *
     * @var string
     */
    public $analysisId;
    protected $_name = [
        'analysisId' => 'analysisId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisId) {
            $res['analysisId'] = $this->analysisId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAIQueryResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['analysisId'])) {
            $model->analysisId = $map['analysisId'];
        }

        return $model;
    }
}
