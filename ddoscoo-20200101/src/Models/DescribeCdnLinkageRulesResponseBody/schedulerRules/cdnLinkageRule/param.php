<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCdnLinkageRulesResponseBody\schedulerRules\cdnLinkageRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCdnLinkageRulesResponseBody\schedulerRules\cdnLinkageRule\param\paramData;

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
        if (null !== $this->paramData) {
            $this->paramData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paramData) {
            $res['ParamData'] = null !== $this->paramData ? $this->paramData->toArray($noStream) : $this->paramData;
        }

        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
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
        if (isset($map['ParamData'])) {
            $model->paramData = paramData::fromMap($map['ParamData']);
        }

        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        return $model;
    }
}
