<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateBusinessRequest extends Model
{
    /**
     * @description The workflow ID.
     *
     * You can call the [ListBusiness](https://help.aliyun.com/document_detail/173945.html) operation to query the ID.
     *
     * This parameter is required.
     *
     * @example 300000
     *
     * @var int
     */
    public $businessId;

    /**
     * @description The name of the workflow.
     *
     * You can call the [ListBusiness](https://help.aliyun.com/document_detail/173945.html) operation to query the name.
     *
     * @example MyBusiness
     *
     * @var string
     */
    public $businessName;

    /**
     * @description The description of the workflow.
     *
     * @example modified from my first business
     *
     * @var string
     */
    public $description;

    /**
     * @description The owner of the workflow.
     *
     * You can call the [ListBusiness](https://help.aliyun.com/document_detail/173945.html) operation to query the owner.
     *
     * @example 348428****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://dataworks.console.aliyun.com/workspace/list) and go to the Workspace page to obtain the workspace ID. You must configure either this parameter or the `ProjectIdentifier` parameter to determine the DataWorks workspace to which the operation is applied.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the DataWorks workspace. You can log on to the [DataWorks console](https://dataworks.console.aliyun.com/workspace/list) and go to the Workspace page to obtain the name. You must configure either this parameter or the `ProjectId` parameter to determine the DataWorks workspace to which the operation is applied.
     *
     * @example dw_project
     *
     * @var string
     */
    public $projectIdentifier;
    protected $_name = [
        'businessId' => 'BusinessId',
        'businessName' => 'BusinessName',
        'description' => 'Description',
        'owner' => 'Owner',
        'projectId' => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }
        if (null !== $this->businessName) {
            $res['BusinessName'] = $this->businessName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBusinessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }
        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }

        return $model;
    }
}
