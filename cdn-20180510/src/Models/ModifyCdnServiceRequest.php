<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class ModifyCdnServiceRequest extends Model
{
    /**
     * @description The new metering method for Alibaba Cloud CDN. Valid values:
     *
     *   **PayByTraffic**: pay-by-data-transfer
     *   **PayByBandwidth**: pay-by-bandwidth
     *
     * This parameter is required.
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'internetChargeType' => 'InternetChargeType',
        'ownerId'            => 'OwnerId',
        'securityToken'      => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCdnServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
