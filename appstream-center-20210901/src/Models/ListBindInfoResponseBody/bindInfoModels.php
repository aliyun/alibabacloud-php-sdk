<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBindInfoResponseBody;

use AlibabaCloud\Tea\Model;

class bindInfoModels extends Model
{
    /**
     * @example simple
     *
     * @var string
     */
    public $accountType;

    /**
     * @example ca-fq738or6vd854****
     *
     * @var string
     */
    public $appId;

    /**
     * @example aig-0abxhr6ce35w8****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @example ai-83oe276fre4l3****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example CloudApp
     *
     * @var string
     */
    public $productType;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Alice
     *
     * @var string
     */
    public $userId;

    /**
     * @example 2ca6f5a93536****
     *
     * @var string
     */
    public $wyId;
    protected $_name = [
        'accountType'        => 'AccountType',
        'appId'              => 'AppId',
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId'      => 'AppInstanceId',
        'appVersion'         => 'AppVersion',
        'productType'        => 'ProductType',
        'regionId'           => 'RegionId',
        'userId'             => 'UserId',
        'wyId'               => 'WyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->wyId) {
            $res['WyId'] = $this->wyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bindInfoModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WyId'])) {
            $model->wyId = $map['WyId'];
        }

        return $model;
    }
}
