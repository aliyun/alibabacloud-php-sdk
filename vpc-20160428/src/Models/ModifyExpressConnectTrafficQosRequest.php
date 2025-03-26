<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyExpressConnectTrafficQosRequest\addInstanceList;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyExpressConnectTrafficQosRequest\removeInstanceList;

class ModifyExpressConnectTrafficQosRequest extends Model
{
    /**
     * @var addInstanceList[]
     */
    public $addInstanceList;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $qosDescription;

    /**
     * @var string
     */
    public $qosId;

    /**
     * @var string
     */
    public $qosName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var removeInstanceList[]
     */
    public $removeInstanceList;

    /**
     * @var string
     */
    public $resourceOwnerAccount;
    protected $_name = [
        'addInstanceList' => 'AddInstanceList',
        'clientToken' => 'ClientToken',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'qosDescription' => 'QosDescription',
        'qosId' => 'QosId',
        'qosName' => 'QosName',
        'regionId' => 'RegionId',
        'removeInstanceList' => 'RemoveInstanceList',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
    ];

    public function validate()
    {
        if (\is_array($this->addInstanceList)) {
            Model::validateArray($this->addInstanceList);
        }
        if (\is_array($this->removeInstanceList)) {
            Model::validateArray($this->removeInstanceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addInstanceList) {
            if (\is_array($this->addInstanceList)) {
                $res['AddInstanceList'] = [];
                $n1 = 0;
                foreach ($this->addInstanceList as $item1) {
                    $res['AddInstanceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->qosDescription) {
            $res['QosDescription'] = $this->qosDescription;
        }

        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }

        if (null !== $this->qosName) {
            $res['QosName'] = $this->qosName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->removeInstanceList) {
            if (\is_array($this->removeInstanceList)) {
                $res['RemoveInstanceList'] = [];
                $n1 = 0;
                foreach ($this->removeInstanceList as $item1) {
                    $res['RemoveInstanceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
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
        if (isset($map['AddInstanceList'])) {
            if (!empty($map['AddInstanceList'])) {
                $model->addInstanceList = [];
                $n1 = 0;
                foreach ($map['AddInstanceList'] as $item1) {
                    $model->addInstanceList[$n1++] = addInstanceList::fromMap($item1);
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['QosDescription'])) {
            $model->qosDescription = $map['QosDescription'];
        }

        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }

        if (isset($map['QosName'])) {
            $model->qosName = $map['QosName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RemoveInstanceList'])) {
            if (!empty($map['RemoveInstanceList'])) {
                $model->removeInstanceList = [];
                $n1 = 0;
                foreach ($map['RemoveInstanceList'] as $item1) {
                    $model->removeInstanceList[$n1++] = removeInstanceList::fromMap($item1);
                }
            }
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        return $model;
    }
}
