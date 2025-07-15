<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyExpressConnectTrafficQosRequest\addInstanceList;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyExpressConnectTrafficQosRequest\removeInstanceList;
use AlibabaCloud\Tea\Model;

class ModifyExpressConnectTrafficQosRequest extends Model
{
    /**
     * @description The instances to be added. Ignore this parameter if no instances are to be added.
     *
     * @var addInstanceList[]
     */
    public $addInstanceList;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     *
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe637760
     *
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
     * @description The description of the QoS policy.
     *
     * @example qos-test
     *
     * @var string
     */
    public $qosDescription;

    /**
     * @description The ID of the QoS policy.
     *
     * This parameter is required.
     *
     * @example qos-2giu0a6vd5x0mv4700
     *
     * @var string
     */
    public $qosId;

    /**
     * @description The name of the QoS policy.
     *
     * @example qos-test
     *
     * @var string
     */
    public $qosName;

    /**
     * @description The region ID of the resource.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The instances to be removed. Ignore this parameter if no instances are to be removed.
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addInstanceList) {
            $res['AddInstanceList'] = [];
            if (null !== $this->addInstanceList && \is_array($this->addInstanceList)) {
                $n = 0;
                foreach ($this->addInstanceList as $item) {
                    $res['AddInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['RemoveInstanceList'] = [];
            if (null !== $this->removeInstanceList && \is_array($this->removeInstanceList)) {
                $n = 0;
                foreach ($this->removeInstanceList as $item) {
                    $res['RemoveInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyExpressConnectTrafficQosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddInstanceList'])) {
            if (!empty($map['AddInstanceList'])) {
                $model->addInstanceList = [];
                $n = 0;
                foreach ($map['AddInstanceList'] as $item) {
                    $model->addInstanceList[$n++] = null !== $item ? addInstanceList::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['RemoveInstanceList'] as $item) {
                    $model->removeInstanceList[$n++] = null !== $item ? removeInstanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        return $model;
    }
}
