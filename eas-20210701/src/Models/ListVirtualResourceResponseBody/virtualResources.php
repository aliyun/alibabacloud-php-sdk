<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListVirtualResourceResponseBody;

use AlibabaCloud\Tea\Model;

class virtualResources extends Model
{
    /**
     * @description The time when the virtual resource group was created.
     *
     * @example 2024-10-16T17:52:49Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The number of deployed services.
     *
     * @example 1
     *
     * @var int
     */
    public $serviceCount;

    /**
     * @description The time when the virtual resource group was last updated.
     *
     * @example 2024-10-16T19:52:49Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The ID of the virtual resource group.
     *
     * @example eas-vr-npovr28onap1xxxxxx
     *
     * @var string
     */
    public $virtualResourceId;

    /**
     * @description The name of the virtual resource group.
     *
     * @example MyVirtualResource
     *
     * @var string
     */
    public $virtualResourceName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'serviceCount' => 'ServiceCount',
        'updateTime' => 'UpdateTime',
        'virtualResourceId' => 'VirtualResourceId',
        'virtualResourceName' => 'VirtualResourceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->serviceCount) {
            $res['ServiceCount'] = $this->serviceCount;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->virtualResourceId) {
            $res['VirtualResourceId'] = $this->virtualResourceId;
        }
        if (null !== $this->virtualResourceName) {
            $res['VirtualResourceName'] = $this->virtualResourceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ServiceCount'])) {
            $model->serviceCount = $map['ServiceCount'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VirtualResourceId'])) {
            $model->virtualResourceId = $map['VirtualResourceId'];
        }
        if (isset($map['VirtualResourceName'])) {
            $model->virtualResourceName = $map['VirtualResourceName'];
        }

        return $model;
    }
}
