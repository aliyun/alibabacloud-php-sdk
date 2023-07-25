<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackResponseBody\compliancePack;
use AlibabaCloud\Tea\Model;

class GetCompliancePackResponseBody extends Model
{
    /**
     * @description The details of the compliance package.
     *
     * @var compliancePack
     */
    public $compliancePack;

    /**
     * @description The request ID.
     *
     * @example 6EC7AED1-172F-42AE-9C12-295BC2ADB751
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'compliancePack' => 'CompliancePack',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePack) {
            $res['CompliancePack'] = null !== $this->compliancePack ? $this->compliancePack->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCompliancePackResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePack'])) {
            $model->compliancePack = compliancePack::fromMap($map['CompliancePack']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
