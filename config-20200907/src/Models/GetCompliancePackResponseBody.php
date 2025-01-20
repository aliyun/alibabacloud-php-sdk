<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetCompliancePackResponseBody\compliancePack;

class GetCompliancePackResponseBody extends Model
{
    /**
     * @var compliancePack
     */
    public $compliancePack;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'compliancePack' => 'CompliancePack',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->compliancePack) {
            $this->compliancePack->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compliancePack) {
            $res['CompliancePack'] = null !== $this->compliancePack ? $this->compliancePack->toArray($noStream) : $this->compliancePack;
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
        if (isset($map['CompliancePack'])) {
            $model->compliancePack = compliancePack::fromMap($map['CompliancePack']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
