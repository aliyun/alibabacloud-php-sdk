<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnConfigGroupDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $bizName;

    /**
     * @var string
     */
    public $configGroupId;

    /**
     * @var string
     */
    public $configGroupName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'bizName'         => 'BizName',
        'configGroupId'   => 'ConfigGroupId',
        'configGroupName' => 'ConfigGroupName',
        'createTime'      => 'CreateTime',
        'description'     => 'Description',
        'requestId'       => 'RequestId',
        'updateTime'      => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->configGroupId) {
            $res['ConfigGroupId'] = $this->configGroupId;
        }
        if (null !== $this->configGroupName) {
            $res['ConfigGroupName'] = $this->configGroupName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnConfigGroupDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['ConfigGroupId'])) {
            $model->configGroupId = $map['ConfigGroupId'];
        }
        if (isset($map['ConfigGroupName'])) {
            $model->configGroupName = $map['ConfigGroupName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
