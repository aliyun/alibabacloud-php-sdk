<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeStacksResponseBody\stacks;

use AlibabaCloud\Tea\Model;

class stack extends Model
{
    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $recommendedStack;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var int
     */
    public $versionCode;

    /**
     * @var bool
     */
    public $latestStack;
    protected $_name = [
        'updateTime'       => 'UpdateTime',
        'stackId'          => 'StackId',
        'createTime'       => 'CreateTime',
        'recommendedStack' => 'RecommendedStack',
        'stackName'        => 'StackName',
        'categoryName'     => 'CategoryName',
        'versionCode'      => 'VersionCode',
        'latestStack'      => 'LatestStack',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->recommendedStack) {
            $res['RecommendedStack'] = $this->recommendedStack;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->latestStack) {
            $res['LatestStack'] = $this->latestStack;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stack
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RecommendedStack'])) {
            $model->recommendedStack = $map['RecommendedStack'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['LatestStack'])) {
            $model->latestStack = $map['LatestStack'];
        }

        return $model;
    }
}
