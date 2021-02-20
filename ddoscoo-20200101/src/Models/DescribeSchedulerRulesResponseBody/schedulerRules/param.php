<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSchedulerRulesResponseBody\schedulerRules;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSchedulerRulesResponseBody\schedulerRules\param\paramData;
use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @var paramData
     */
    public $paramData;

    /**
     * @var string
     */
    public $paramType;
    protected $_name = [
        'paramData' => 'ParamData',
        'paramType' => 'ParamType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramData) {
            $res['ParamData'] = null !== $this->paramData ? $this->paramData->toMap() : null;
        }
        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return param
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamData'])) {
            $model->paramData = paramData::fromMap($map['ParamData']);
        }
        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        return $model;
    }
}
