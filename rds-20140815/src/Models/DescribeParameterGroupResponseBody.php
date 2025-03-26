<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody\paramGroup;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterGroupResponseBody\relatedCustinsInfo;

class DescribeParameterGroupResponseBody extends Model
{
    /**
     * @var paramGroup
     */
    public $paramGroup;

    /**
     * @var relatedCustinsInfo
     */
    public $relatedCustinsInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'paramGroup' => 'ParamGroup',
        'relatedCustinsInfo' => 'RelatedCustinsInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->paramGroup) {
            $this->paramGroup->validate();
        }
        if (null !== $this->relatedCustinsInfo) {
            $this->relatedCustinsInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paramGroup) {
            $res['ParamGroup'] = null !== $this->paramGroup ? $this->paramGroup->toArray($noStream) : $this->paramGroup;
        }

        if (null !== $this->relatedCustinsInfo) {
            $res['RelatedCustinsInfo'] = null !== $this->relatedCustinsInfo ? $this->relatedCustinsInfo->toArray($noStream) : $this->relatedCustinsInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
