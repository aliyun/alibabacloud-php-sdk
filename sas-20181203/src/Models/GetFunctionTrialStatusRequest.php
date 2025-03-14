<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetFunctionTrialStatusRequest extends Model
{
    /**
     * @description The name of the function module.
     *
     * @example trail_file_detect_api_reward
     *
     * @var string
     */
    public $functionName;
    protected $_name = [
        'functionName' => 'FunctionName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFunctionTrialStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        return $model;
    }
}
