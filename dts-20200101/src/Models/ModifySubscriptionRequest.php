<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ModifySubscriptionRequest extends Model
{
    /**
     * @var string
     */
    public $dbList;

    /**
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @var string
     */
    public $dtsJobId;

    /**
     * @var string
     */
    public $modifyType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $reserved;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $subscriptionDataTypeDDL;

    /**
     * @var bool
     */
    public $subscriptionDataTypeDML;
    protected $_name = [
        'dbList' => 'DbList',
        'dtsInstanceId' => 'DtsInstanceId',
        'dtsJobId' => 'DtsJobId',
        'modifyType' => 'ModifyType',
        'regionId' => 'RegionId',
        'reserved' => 'Reserved',
        'resourceGroupId' => 'ResourceGroupId',
        'subscriptionDataTypeDDL' => 'SubscriptionDataTypeDDL',
        'subscriptionDataTypeDML' => 'SubscriptionDataTypeDML',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbList) {
            $res['DbList'] = $this->dbList;
        }

        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }

        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }

        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reserved) {
            $res['Reserved'] = $this->reserved;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->subscriptionDataTypeDDL) {
            $res['SubscriptionDataTypeDDL'] = $this->subscriptionDataTypeDDL;
        }

        if (null !== $this->subscriptionDataTypeDML) {
            $res['SubscriptionDataTypeDML'] = $this->subscriptionDataTypeDML;
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
        if (isset($map['DbList'])) {
            $model->dbList = $map['DbList'];
        }

        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }

        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }

        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Reserved'])) {
            $model->reserved = $map['Reserved'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SubscriptionDataTypeDDL'])) {
            $model->subscriptionDataTypeDDL = $map['SubscriptionDataTypeDDL'];
        }

        if (isset($map['SubscriptionDataTypeDML'])) {
            $model->subscriptionDataTypeDML = $map['SubscriptionDataTypeDML'];
        }

        return $model;
    }
}
