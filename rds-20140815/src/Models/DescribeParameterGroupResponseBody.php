<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody\paramGroup;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody\relatedCustinsInfo;
use AlibabaCloud\Tea\Model;

class DescribeParameterGroupResponseBody extends Model
{
    /**
     * @description The information about the parameter template.
     *
     * @var paramGroup
     */
    public $paramGroup;

    /**
     * @description The information about the instance to which the parameter template is applied.
     *
     * >  This parameter is available only for ApsaraDB RDS for PostgreSQL instances.
     * @var relatedCustinsInfo
     */
    public $relatedCustinsInfo;

    /**
     * @description The request ID.
     *
     * @example 498AE8CA-8C81-4A01-AF37-2B902014ED30
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'paramGroup'         => 'ParamGroup',
        'relatedCustinsInfo' => 'RelatedCustinsInfo',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramGroup) {
            $res['ParamGroup'] = null !== $this->paramGroup ? $this->paramGroup->toMap() : null;
        }
        if (null !== $this->relatedCustinsInfo) {
            $res['RelatedCustinsInfo'] = null !== $this->relatedCustinsInfo ? $this->relatedCustinsInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParameterGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamGroup'])) {
            $model->paramGroup = paramGroup::fromMap($map['ParamGroup']);
        }
        if (isset($map['RelatedCustinsInfo'])) {
            $model->relatedCustinsInfo = relatedCustinsInfo::fromMap($map['RelatedCustinsInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
