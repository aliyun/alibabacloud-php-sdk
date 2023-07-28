<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\RegisterDefaultPatchBaselineResponseBody;

use AlibabaCloud\Tea\Model;

class patchBaseline extends Model
{
    /**
     * @description The rules of scanning and installing patches for the specified operating system.
     *
     * @example {"PatchRules":[{"PatchFilterGroup":[{"Key":"PatchSet","Values":["OS"]},{"Key":"ProductFamily","Values":["Windows"]},{"Key":"Product","Values":["Windows 10","Windows 7"]},{"Key":"Classification","Values":["Security Updates","Updates","Update Rollups","Critical Updates"]},{"Key":"Severity","Values":["Critical","Important","Moderate"]}],"ApproveAfterDays":7,"ApproveUntilDate":"","EnableNonSecurity":true,"ComplianceLevel":"Medium"}]}
     *
     * @var string
     */
    public $approvalRules;

    /**
     * @description The user who created the patch baseline.
     *
     * @example root(130900000)
     *
     * @var string
     */
    public $createdBy;

    /**
     * @description The time when the patch baseline was created.
     *
     * @example 2021-09-07T03:42:56Z
     *
     * @var string
     */
    public $createdDate;

    /**
     * @description The description of the patch baseline.
     *
     * @example RegisterPatchBaseline
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the patch baseline.
     *
     * @example pb-445340b5c6504a85a300
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the patch baseline.
     *
     * @example MyPatchBaseline
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the operating system.
     *
     * @example Windows
     *
     * @var string
     */
    public $operationSystem;

    /**
     * @description The share type of the patch baseline.
     *
     * @example Private
     *
     * @var string
     */
    public $shareType;

    /**
     * @description The user who last updated the patch baseline.
     *
     * @example root(130900000)
     *
     * @var string
     */
    public $updatedBy;

    /**
     * @description The time when the patch baseline was last updated.
     *
     * @example 2021-09-07T03:42:56Z
     *
     * @var string
     */
    public $updatedDate;
    protected $_name = [
        'approvalRules'   => 'ApprovalRules',
        'createdBy'       => 'CreatedBy',
        'createdDate'     => 'CreatedDate',
        'description'     => 'Description',
        'id'              => 'Id',
        'name'            => 'Name',
        'operationSystem' => 'OperationSystem',
        'shareType'       => 'ShareType',
        'updatedBy'       => 'UpdatedBy',
        'updatedDate'     => 'UpdatedDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvalRules) {
            $res['ApprovalRules'] = $this->approvalRules;
        }
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->createdDate) {
            $res['CreatedDate'] = $this->createdDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operationSystem) {
            $res['OperationSystem'] = $this->operationSystem;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->updatedBy) {
            $res['UpdatedBy'] = $this->updatedBy;
        }
        if (null !== $this->updatedDate) {
            $res['UpdatedDate'] = $this->updatedDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return patchBaseline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovalRules'])) {
            $model->approvalRules = $map['ApprovalRules'];
        }
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['CreatedDate'])) {
            $model->createdDate = $map['CreatedDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OperationSystem'])) {
            $model->operationSystem = $map['OperationSystem'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['UpdatedBy'])) {
            $model->updatedBy = $map['UpdatedBy'];
        }
        if (isset($map['UpdatedDate'])) {
            $model->updatedDate = $map['UpdatedDate'];
        }

        return $model;
    }
}
