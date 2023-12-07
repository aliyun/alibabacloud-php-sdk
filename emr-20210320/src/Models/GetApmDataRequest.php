<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class GetApmDataRequest extends Model
{
    /**
     * @description 集群ID。非必传参数。
     *
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $provider;

    /**
     * @description 地域ID。
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 如果存在clusterId，从Cluster中获取该值，如果clusterId为空，用户显式指定
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'componentName'   => 'ComponentName',
        'language'        => 'Language',
        'provider'        => 'Provider',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApmDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
