<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class CreateAggregateCompliancePackResponseBody extends Model
{
    /**
     * @description The compliance package ID.
     *
     * @example cp-fc56626622af00f9****
     *
     * @var string
     */
    public $compliancePackId;

    /**
     * @description The request ID.
     *
     * @example CC0CE5EB-E51E-48EB-B4AB-9A9E131ECC0F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'compliancePackId' => 'CompliancePackId',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAggregateCompliancePackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
