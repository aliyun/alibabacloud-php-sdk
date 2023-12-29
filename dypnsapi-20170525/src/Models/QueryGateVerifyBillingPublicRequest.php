<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryGateVerifyBillingPublicRequest extends Model
{
    /**
     * @description The verification method. Valid values:
     *
     *   **0**: phone number verification
     *   **1**: one-click logon
     *   **2**: all
     *   **3**: facial recognition
     *   **4**: SMS verification
     *
     * @example 1
     *
     * @var int
     */
    public $authenticationType;

    /**
     * @description The month in which the bill is generated. Specify this parameter in the YYYYMM format. Example: 202111.
     *
     * @example 202111
     *
     * @var string
     */
    public $month;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;
    protected $_name = [
        'authenticationType'   => 'AuthenticationType',
        'month'                => 'Month',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authenticationType) {
            $res['AuthenticationType'] = $this->authenticationType;
        }
        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryGateVerifyBillingPublicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthenticationType'])) {
            $model->authenticationType = $map['AuthenticationType'];
        }
        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        return $model;
    }
}
