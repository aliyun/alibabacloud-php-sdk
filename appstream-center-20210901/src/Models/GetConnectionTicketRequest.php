<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class GetConnectionTicketRequest extends Model
{
    /**
     * @example ca-e4s0puhmwi7v****
     *
     * @var string
     */
    public $appId;

    /**
     * @var string[]
     */
    public $appInstanceGroupIdList;

    /**
     * @example ai-1rznfnrvsa99d****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @example /q /n
     *
     * @var string
     */
    public $appStartParam;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example CloudApp
     *
     * @var string
     */
    public $productType;

    /**
     * @example 28778acb-a469-4bc0-8e0f****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'appId'                  => 'AppId',
        'appInstanceGroupIdList' => 'AppInstanceGroupIdList',
        'appInstanceId'          => 'AppInstanceId',
        'appStartParam'          => 'AppStartParam',
        'appVersion'             => 'AppVersion',
        'bizRegionId'            => 'BizRegionId',
        'endUserId'              => 'EndUserId',
        'productType'            => 'ProductType',
        'taskId'                 => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appInstanceGroupIdList) {
            $res['AppInstanceGroupIdList'] = $this->appInstanceGroupIdList;
        }
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
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

    /**
     * @param array $map
     *
     * @return GetConnectionTicketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppInstanceGroupIdList'])) {
            if (!empty($map['AppInstanceGroupIdList'])) {
                $model->appInstanceGroupIdList = $map['AppInstanceGroupIdList'];
            }
        }
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
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
