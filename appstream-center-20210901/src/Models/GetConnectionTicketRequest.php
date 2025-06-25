<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class GetConnectionTicketRequest extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string[]
     */
    public $appInstanceGroupIdList;

    /**
     * @var string
     */
    public $appInstanceId;

    /**
     * @var string
     */
    public $appInstancePersistentId;

    /**
     * @var string
     */
    public $appPolicyId;

    /**
     * @var string
     */
    public $appStartParam;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'accessType' => 'AccessType',
        'appId' => 'AppId',
        'appInstanceGroupIdList' => 'AppInstanceGroupIdList',
        'appInstanceId' => 'AppInstanceId',
        'appInstancePersistentId' => 'AppInstancePersistentId',
        'appPolicyId' => 'AppPolicyId',
        'appStartParam' => 'AppStartParam',
        'appVersion' => 'AppVersion',
        'bizRegionId' => 'BizRegionId',
        'endUserId' => 'EndUserId',
        'productType' => 'ProductType',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->appInstanceGroupIdList)) {
            Model::validateArray($this->appInstanceGroupIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appInstanceGroupIdList) {
            if (\is_array($this->appInstanceGroupIdList)) {
                $res['AppInstanceGroupIdList'] = [];
                $n1 = 0;
                foreach ($this->appInstanceGroupIdList as $item1) {
                    $res['AppInstanceGroupIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }

        if (null !== $this->appInstancePersistentId) {
            $res['AppInstancePersistentId'] = $this->appInstancePersistentId;
        }

        if (null !== $this->appPolicyId) {
            $res['AppPolicyId'] = $this->appPolicyId;
        }

        if (null !== $this->appStartParam) {
            $res['AppStartParam'] = $this->appStartParam;
        }

        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppInstanceGroupIdList'])) {
            if (!empty($map['AppInstanceGroupIdList'])) {
                $model->appInstanceGroupIdList = [];
                $n1 = 0;
                foreach ($map['AppInstanceGroupIdList'] as $item1) {
                    $model->appInstanceGroupIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }

        if (isset($map['AppInstancePersistentId'])) {
            $model->appInstancePersistentId = $map['AppInstancePersistentId'];
        }

        if (isset($map['AppPolicyId'])) {
            $model->appPolicyId = $map['AppPolicyId'];
        }

        if (isset($map['AppStartParam'])) {
            $model->appStartParam = $map['AppStartParam'];
        }

        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
