<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetPatchBaselineResponseBody;

use AlibabaCloud\SDK\Oos\V20190601\Models\GetPatchBaselineResponseBody\patchBaseline\tags;
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
     * @var string[]
     */
    public $approvedPatches;

    /**
     * @var bool
     */
    public $approvedPatchesEnableNonSecurity;

    /**
     * @description The creator of the patch baseline.
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
     * @example UpdatePatchBaseline
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
     * @description Indicates whether the patch baseline is set as the default patch baseline.
     *
     * @example false
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The name of the patch baseline.
     *
     * @example MypatchBaseline
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
     * @var string[]
     */
    public $rejectedPatches;

    /**
     * @var string
     */
    public $rejectedPatchesAction;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The share type of the patch baseline.
     *
     * @example Private
     *
     * @var string
     */
    public $shareType;

    /**
     * @var string[]
     */
    public $sources;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @description The user who last modified the patch baseline.
     *
     * @example root(130900000)
     *
     * @var string
     */
    public $updatedBy;

    /**
     * @description The time when the patch baseline was last modified.
     *
     * @example 2021-09-08T07:26:38Z
     *
     * @var string
     */
    public $updatedDate;
    protected $_name = [
        'approvalRules'                    => 'ApprovalRules',
        'approvedPatches'                  => 'ApprovedPatches',
        'approvedPatchesEnableNonSecurity' => 'ApprovedPatchesEnableNonSecurity',
        'createdBy'                        => 'CreatedBy',
        'createdDate'                      => 'CreatedDate',
        'description'                      => 'Description',
        'id'                               => 'Id',
        'isDefault'                        => 'IsDefault',
        'name'                             => 'Name',
        'operationSystem'                  => 'OperationSystem',
        'rejectedPatches'                  => 'RejectedPatches',
        'rejectedPatchesAction'            => 'RejectedPatchesAction',
        'resourceGroupId'                  => 'ResourceGroupId',
        'shareType'                        => 'ShareType',
        'sources'                          => 'Sources',
        'tags'                             => 'Tags',
        'updatedBy'                        => 'UpdatedBy',
        'updatedDate'                      => 'UpdatedDate',
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
        if (null !== $this->approvedPatches) {
            $res['ApprovedPatches'] = $this->approvedPatches;
        }
        if (null !== $this->approvedPatchesEnableNonSecurity) {
            $res['ApprovedPatchesEnableNonSecurity'] = $this->approvedPatchesEnableNonSecurity;
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
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operationSystem) {
            $res['OperationSystem'] = $this->operationSystem;
        }
        if (null !== $this->rejectedPatches) {
            $res['RejectedPatches'] = $this->rejectedPatches;
        }
        if (null !== $this->rejectedPatchesAction) {
            $res['RejectedPatchesAction'] = $this->rejectedPatchesAction;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->sources) {
            $res['Sources'] = $this->sources;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ApprovedPatches'])) {
            if (!empty($map['ApprovedPatches'])) {
                $model->approvedPatches = $map['ApprovedPatches'];
            }
        }
        if (isset($map['ApprovedPatchesEnableNonSecurity'])) {
            $model->approvedPatchesEnableNonSecurity = $map['ApprovedPatchesEnableNonSecurity'];
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
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OperationSystem'])) {
            $model->operationSystem = $map['OperationSystem'];
        }
        if (isset($map['RejectedPatches'])) {
            if (!empty($map['RejectedPatches'])) {
                $model->rejectedPatches = $map['RejectedPatches'];
            }
        }
        if (isset($map['RejectedPatchesAction'])) {
            $model->rejectedPatchesAction = $map['RejectedPatchesAction'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['Sources'])) {
            if (!empty($map['Sources'])) {
                $model->sources = $map['Sources'];
            }
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
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
