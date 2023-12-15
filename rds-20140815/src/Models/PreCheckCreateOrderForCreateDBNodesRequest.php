<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\PreCheckCreateOrderForCreateDBNodesRequest\DBNode;
use AlibabaCloud\Tea\Model;

class PreCheckCreateOrderForCreateDBNodesRequest extends Model
{
    /**
     * @description Specifies whether to automatically complete the payment. Valid values:
     *
     * 1.  **true**: automatically completes the payment. You must make sure that your account balance is sufficient.
     * 2.  **false**: does not automatically complete the payment. An unpaid order is generated.
     *
     * >  The default value is true. If your account balance is insufficient, you can set the AutoPay parameter to false to generate an unpaid order. Then, you can log on to the ApsaraDB RDS console to complete the payment.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The additional business information about the instance.
     *
     * @example {\"bigdipper_source\":{\"spm\":\"5176.19907444.0.0.6cdb1450f89kDx\",\"url_spm\":\"\"}}
     *
     * @var string
     */
    public $businessInfo;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the generated token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCzxxxxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The commodity code. Valid values:
     *
     *   **bards**: The instance is a pay-as-you-go primary instance.
     *   **rds**: The instance is a subscription primary instance.
     *   **rords**: The instance is a pay-as-you-go read-only instance.
     *   **rds_rordspre_public_cn**: The instance is a subscription read-only instance.
     *   **bards_intl**: The instance is a pay-as-you-go primary instance.
     *   **rds_intl**: The instance is a subscription primary instance.
     *   **rords_intl**: The instance is a pay-as-you-go read-only instance.
     *   **rds_rordspre_public_intl**: The instance is a subscription read-only instance.
     *
     * @example bards
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The instance ID.
     *
     * @example rm-bp1f74xsch85v3m76
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The information about the node.
     *
     * >  This parameter is used for ApsaraDB RDS for MySQL instances on RDS Cluster Edition.
     * @var DBNode[]
     */
    public $DBNode;

    /**
     * @description The database engine version of the instance. Valid values:
     *
     *   Valid values if you set Engine to MySQL: **5.5, 5.6, 5.7, and 8.0**
     *   Valid values if you set Engine to SQLServer: **2008r2, 08r2\_ent_ha, 2012, 2012\_ent_ha, 2012\_std_ha, 2012\_web, 2014\_std_ha, 2016\_ent_ha, 2016\_std_ha, 2016\_web, 2017\_std_ha, 2017\_ent, 2019\_std_ha, and 2019\_ent**
     *   Valid values if you set Engine to PostgreSQL: **10.0, 11.0, 12.0, 13.0, and 14.0**
     *   Valid value if you set Engine to MariaDB: **10.3**
     *
     * @example 8.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The type of the database node. Valid values:
     *
     *   **Master**: the primary node
     *   **Slave**: the secondary node
     *
     * @example Master
     *
     * @var string
     */
    public $nodeType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The coupon code.
     *
     * @example aliwood-1688-mobile-promotion
     *
     * @var string
     */
    public $promotionCode;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource.
     *
     * @example buy
     *
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The zone ID. You can call the [DescribeRegions](~~26243~~) operation to query the zone ID.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoPay'              => 'AutoPay',
        'businessInfo'         => 'BusinessInfo',
        'clientToken'          => 'ClientToken',
        'commodityCode'        => 'CommodityCode',
        'DBInstanceId'         => 'DBInstanceId',
        'DBNode'               => 'DBNode',
        'engineVersion'        => 'EngineVersion',
        'nodeType'             => 'NodeType',
        'ownerId'              => 'OwnerId',
        'promotionCode'        => 'PromotionCode',
        'regionId'             => 'RegionId',
        'resource'             => 'Resource',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->businessInfo) {
            $res['BusinessInfo'] = $this->businessInfo;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBNode) {
            $res['DBNode'] = [];
            if (null !== $this->DBNode && \is_array($this->DBNode)) {
                $n = 0;
                foreach ($this->DBNode as $item) {
                    $res['DBNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreCheckCreateOrderForCreateDBNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['BusinessInfo'])) {
            $model->businessInfo = $map['BusinessInfo'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBNode'])) {
            if (!empty($map['DBNode'])) {
                $model->DBNode = [];
                $n             = 0;
                foreach ($map['DBNode'] as $item) {
                    $model->DBNode[$n++] = null !== $item ? DBNode::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
