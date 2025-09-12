<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceListResponseBody\instanceList\tags;

class instanceList extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $createErrorCode;

    /**
     * @var int
     */
    public $createMilliseconds;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var bool
     */
    public $enableColumn;

    /**
     * @var bool
     */
    public $enableCompute;

    /**
     * @var bool
     */
    public $enableLts;

    /**
     * @var bool
     */
    public $enableMessage;

    /**
     * @var bool
     */
    public $enableRow;

    /**
     * @var bool
     */
    public $enableStream;

    /**
     * @var bool
     */
    public $enableVector;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $expiredMilliseconds;

    /**
     * @var string
     */
    public $instanceAlias;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $instanceStorage;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'aliUid' => 'AliUid',
        'createErrorCode' => 'CreateErrorCode',
        'createMilliseconds' => 'CreateMilliseconds',
        'createTime' => 'CreateTime',
        'enableColumn' => 'EnableColumn',
        'enableCompute' => 'EnableCompute',
        'enableLts' => 'EnableLts',
        'enableMessage' => 'EnableMessage',
        'enableRow' => 'EnableRow',
        'enableStream' => 'EnableStream',
        'enableVector' => 'EnableVector',
        'engineType' => 'EngineType',
        'expireTime' => 'ExpireTime',
        'expiredMilliseconds' => 'ExpiredMilliseconds',
        'instanceAlias' => 'InstanceAlias',
        'instanceId' => 'InstanceId',
        'instanceStatus' => 'InstanceStatus',
        'instanceStorage' => 'InstanceStorage',
        'networkType' => 'NetworkType',
        'payType' => 'PayType',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'serviceType' => 'ServiceType',
        'tags' => 'Tags',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->createErrorCode) {
            $res['CreateErrorCode'] = $this->createErrorCode;
        }

        if (null !== $this->createMilliseconds) {
            $res['CreateMilliseconds'] = $this->createMilliseconds;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->enableColumn) {
            $res['EnableColumn'] = $this->enableColumn;
        }

        if (null !== $this->enableCompute) {
            $res['EnableCompute'] = $this->enableCompute;
        }

        if (null !== $this->enableLts) {
            $res['EnableLts'] = $this->enableLts;
        }

        if (null !== $this->enableMessage) {
            $res['EnableMessage'] = $this->enableMessage;
        }

        if (null !== $this->enableRow) {
            $res['EnableRow'] = $this->enableRow;
        }

        if (null !== $this->enableStream) {
            $res['EnableStream'] = $this->enableStream;
        }

        if (null !== $this->enableVector) {
            $res['EnableVector'] = $this->enableVector;
        }

        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->expiredMilliseconds) {
            $res['ExpiredMilliseconds'] = $this->expiredMilliseconds;
        }

        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->instanceStorage) {
            $res['InstanceStorage'] = $this->instanceStorage;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['CreateErrorCode'])) {
            $model->createErrorCode = $map['CreateErrorCode'];
        }

        if (isset($map['CreateMilliseconds'])) {
            $model->createMilliseconds = $map['CreateMilliseconds'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['EnableColumn'])) {
            $model->enableColumn = $map['EnableColumn'];
        }

        if (isset($map['EnableCompute'])) {
            $model->enableCompute = $map['EnableCompute'];
        }

        if (isset($map['EnableLts'])) {
            $model->enableLts = $map['EnableLts'];
        }

        if (isset($map['EnableMessage'])) {
            $model->enableMessage = $map['EnableMessage'];
        }

        if (isset($map['EnableRow'])) {
            $model->enableRow = $map['EnableRow'];
        }

        if (isset($map['EnableStream'])) {
            $model->enableStream = $map['EnableStream'];
        }

        if (isset($map['EnableVector'])) {
            $model->enableVector = $map['EnableVector'];
        }

        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['ExpiredMilliseconds'])) {
            $model->expiredMilliseconds = $map['ExpiredMilliseconds'];
        }

        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['InstanceStorage'])) {
            $model->instanceStorage = $map['InstanceStorage'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
