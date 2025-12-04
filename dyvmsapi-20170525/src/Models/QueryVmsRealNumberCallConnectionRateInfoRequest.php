<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class QueryVmsRealNumberCallConnectionRateInfoRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $realNumber;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $timePeriod;

    /**
     * @var string
     */
    public $virtualNumber;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'realNumber' => 'RealNumber',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'timePeriod' => 'TimePeriod',
        'virtualNumber' => 'VirtualNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->realNumber) {
            $res['RealNumber'] = $this->realNumber;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->timePeriod) {
            $res['TimePeriod'] = $this->timePeriod;
        }

        if (null !== $this->virtualNumber) {
            $res['VirtualNumber'] = $this->virtualNumber;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RealNumber'])) {
            $model->realNumber = $map['RealNumber'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['TimePeriod'])) {
            $model->timePeriod = $map['TimePeriod'];
        }

        if (isset($map['VirtualNumber'])) {
            $model->virtualNumber = $map['VirtualNumber'];
        }

        return $model;
    }
}
