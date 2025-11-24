<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshUpgradeStatusResponseBody\upgradeDetail;

class DescribeServiceMeshUpgradeStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var upgradeDetail
     */
    public $upgradeDetail;
    protected $_name = [
        'requestId' => 'RequestId',
        'upgradeDetail' => 'UpgradeDetail',
    ];

    public function validate()
    {
        if (null !== $this->upgradeDetail) {
            $this->upgradeDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->upgradeDetail) {
            $res['UpgradeDetail'] = null !== $this->upgradeDetail ? $this->upgradeDetail->toArray($noStream) : $this->upgradeDetail;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UpgradeDetail'])) {
            $model->upgradeDetail = upgradeDetail::fromMap($map['UpgradeDetail']);
        }

        return $model;
    }
}
