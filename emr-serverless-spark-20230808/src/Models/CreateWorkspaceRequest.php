<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateWorkspaceRequest\resourceSpec;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateWorkspaceRequest\tag;

class CreateWorkspaceRequest extends Model
{
    /**
     * @var string
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $autoRenewPeriodUnit;

    /**
     * @var bool
     */
    public $autoStartSessionCluster;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dlfCatalogId;

    /**
     * @var string
     */
    public $dlfType;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $paymentDurationUnit;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var string
     */
    public $releaseType;

    /**
     * @var resourceSpec
     */
    public $resourceSpec;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $workspaceName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoRenew' => 'autoRenew',
        'autoRenewPeriod' => 'autoRenewPeriod',
        'autoRenewPeriodUnit' => 'autoRenewPeriodUnit',
        'autoStartSessionCluster' => 'autoStartSessionCluster',
        'clientToken' => 'clientToken',
        'dlfCatalogId' => 'dlfCatalogId',
        'dlfType' => 'dlfType',
        'duration' => 'duration',
        'ossBucket' => 'ossBucket',
        'paymentDurationUnit' => 'paymentDurationUnit',
        'paymentType' => 'paymentType',
        'ramRoleName' => 'ramRoleName',
        'releaseType' => 'releaseType',
        'resourceSpec' => 'resourceSpec',
        'tag' => 'tag',
        'workspaceName' => 'workspaceName',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (null !== $this->resourceSpec) {
            $this->resourceSpec->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['autoRenew'] = $this->autoRenew;
        }

        if (null !== $this->autoRenewPeriod) {
            $res['autoRenewPeriod'] = $this->autoRenewPeriod;
        }

        if (null !== $this->autoRenewPeriodUnit) {
            $res['autoRenewPeriodUnit'] = $this->autoRenewPeriodUnit;
        }

        if (null !== $this->autoStartSessionCluster) {
            $res['autoStartSessionCluster'] = $this->autoStartSessionCluster;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->dlfCatalogId) {
            $res['dlfCatalogId'] = $this->dlfCatalogId;
        }

        if (null !== $this->dlfType) {
            $res['dlfType'] = $this->dlfType;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->ossBucket) {
            $res['ossBucket'] = $this->ossBucket;
        }

        if (null !== $this->paymentDurationUnit) {
            $res['paymentDurationUnit'] = $this->paymentDurationUnit;
        }

        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }

        if (null !== $this->ramRoleName) {
            $res['ramRoleName'] = $this->ramRoleName;
        }

        if (null !== $this->releaseType) {
            $res['releaseType'] = $this->releaseType;
        }

        if (null !== $this->resourceSpec) {
            $res['resourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toArray($noStream) : $this->resourceSpec;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->workspaceName) {
            $res['workspaceName'] = $this->workspaceName;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['autoRenew'])) {
            $model->autoRenew = $map['autoRenew'];
        }

        if (isset($map['autoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['autoRenewPeriod'];
        }

        if (isset($map['autoRenewPeriodUnit'])) {
            $model->autoRenewPeriodUnit = $map['autoRenewPeriodUnit'];
        }

        if (isset($map['autoStartSessionCluster'])) {
            $model->autoStartSessionCluster = $map['autoStartSessionCluster'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['dlfCatalogId'])) {
            $model->dlfCatalogId = $map['dlfCatalogId'];
        }

        if (isset($map['dlfType'])) {
            $model->dlfType = $map['dlfType'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['ossBucket'])) {
            $model->ossBucket = $map['ossBucket'];
        }

        if (isset($map['paymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['paymentDurationUnit'];
        }

        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }

        if (isset($map['ramRoleName'])) {
            $model->ramRoleName = $map['ramRoleName'];
        }

        if (isset($map['releaseType'])) {
            $model->releaseType = $map['releaseType'];
        }

        if (isset($map['resourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['resourceSpec']);
        }

        if (isset($map['tag'])) {
            if (!empty($map['tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['workspaceName'])) {
            $model->workspaceName = $map['workspaceName'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
