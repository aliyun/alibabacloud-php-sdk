<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateCompliancePackResponseBody\compliancePack;
use AlibabaCloud\Tea\Model;

class GetAggregateCompliancePackResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var compliancePack
     */
    public $compliancePack;
    protected $_name = [
        'requestId'      => 'RequestId',
        'compliancePack' => 'CompliancePack',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->compliancePack) {
            $res['CompliancePack'] = null !== $this->compliancePack ? $this->compliancePack->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateCompliancePackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CompliancePack'])) {
            $model->compliancePack = compliancePack::fromMap($map['CompliancePack']);
        }

        return $model;
    }
}
