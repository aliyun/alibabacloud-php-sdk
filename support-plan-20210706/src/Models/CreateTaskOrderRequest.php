<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Supportplan\V20210706\Models;

use AlibabaCloud\Tea\Model;

class CreateTaskOrderRequest extends Model
{
    /**
     * @example 建单人姓名：快手客户
     *
     * @var string
     */
    public $customerRealName;

    /**
     * @example 123
     *
     * @var string
     */
    public $customerUserId;

    /**
     * @example 重要性描述
     *
     * @var string
     */
    public $importantDescription;

    /**
     * @description This parameter is required.
     *
     * @example 如:normal或者hurry
     *
     * @var string
     */
    public $isImportant;

    /**
     * @description This parameter is required.
     *
     * @example cid+lUpHxTIXt7DYqJDcpVxlA==
     *
     * @var string
     */
    public $openGroupId;

    /**
     * @description productType
     *
     * This parameter is required.
     * @example 3270
     *
     * @var string
     */
    public $productType;

    /**
     * @example lc-云享咨询
     *
     * @var string
     */
    public $productTypeName;

    /**
     * @description taskTitle
     *
     * This parameter is required.
     * @example 任务单标题：必填
     *
     * @var string
     */
    public $taskTitle;
    protected $_name = [
        'customerRealName'     => 'CustomerRealName',
        'customerUserId'       => 'CustomerUserId',
        'importantDescription' => 'ImportantDescription',
        'isImportant'          => 'IsImportant',
        'openGroupId'          => 'OpenGroupId',
        'productType'          => 'ProductType',
        'productTypeName'      => 'ProductTypeName',
        'taskTitle'            => 'TaskTitle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerRealName) {
            $res['CustomerRealName'] = $this->customerRealName;
        }
        if (null !== $this->customerUserId) {
            $res['CustomerUserId'] = $this->customerUserId;
        }
        if (null !== $this->importantDescription) {
            $res['ImportantDescription'] = $this->importantDescription;
        }
        if (null !== $this->isImportant) {
            $res['IsImportant'] = $this->isImportant;
        }
        if (null !== $this->openGroupId) {
            $res['OpenGroupId'] = $this->openGroupId;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->productTypeName) {
            $res['ProductTypeName'] = $this->productTypeName;
        }
        if (null !== $this->taskTitle) {
            $res['TaskTitle'] = $this->taskTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTaskOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerRealName'])) {
            $model->customerRealName = $map['CustomerRealName'];
        }
        if (isset($map['CustomerUserId'])) {
            $model->customerUserId = $map['CustomerUserId'];
        }
        if (isset($map['ImportantDescription'])) {
            $model->importantDescription = $map['ImportantDescription'];
        }
        if (isset($map['IsImportant'])) {
            $model->isImportant = $map['IsImportant'];
        }
        if (isset($map['OpenGroupId'])) {
            $model->openGroupId = $map['OpenGroupId'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['ProductTypeName'])) {
            $model->productTypeName = $map['ProductTypeName'];
        }
        if (isset($map['TaskTitle'])) {
            $model->taskTitle = $map['TaskTitle'];
        }

        return $model;
    }
}
