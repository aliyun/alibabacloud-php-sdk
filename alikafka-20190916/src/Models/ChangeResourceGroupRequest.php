<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class ChangeResourceGroupRequest extends Model
{
    /**
     * @description The ID of the resource group to which you want to transfer the cloud resource.
     *
     * >  You can use resource groups to manage resources owned by your Alibaba Cloud account. Resource groups simplify the resource and permission management of your Alibaba Cloud account. For more information, see [What is resource management?](https://help.aliyun.com/document_detail/94475.html)
     *
     * This parameter is required.
     *
     * @example rg-ac***********7q
     *
     * @var string
     */
    public $newResourceGroupId;

    /**
     * @description The region ID of the resource.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource to which you want to attach a tag. Only the ID of a Message Queue for Apache Kafka instance is supported.
     *
     * For example, if the ID of the instance is alikafka_post-cn-v0h1fgs2xxxx, the resource ID is alikafka_post-cn-v0h1fgs2xxxx.
     *
     * This parameter is required.
     *
     * @example alikafka_post-cn-v0h1fgs2****
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'newResourceGroupId' => 'NewResourceGroupId',
        'regionId' => 'RegionId',
        'resourceId' => 'ResourceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->newResourceGroupId) {
            $res['NewResourceGroupId'] = $this->newResourceGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeResourceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewResourceGroupId'])) {
            $model->newResourceGroupId = $map['NewResourceGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
