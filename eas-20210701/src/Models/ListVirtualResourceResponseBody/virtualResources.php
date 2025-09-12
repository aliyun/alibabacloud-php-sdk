<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListVirtualResourceResponseBody;

use AlibabaCloud\Dara\Model;

class virtualResources extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $serviceCount;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $virtualResourceId;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
