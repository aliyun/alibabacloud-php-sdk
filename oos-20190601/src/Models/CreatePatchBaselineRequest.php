<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\CreatePatchBaselineRequest\tags;
use AlibabaCloud\Tea\Model;

class CreatePatchBaselineRequest extends Model
{
    /**
     * @description The rules of scanning and installing patches for the specified operating system.
     *
     * This parameter is required.
     * @example {"PatchRules":[{"PatchFilterGroup":[{"Key":"PatchSet","Values":["OS"]},{"Key":"ProductFamily","Values":["Windows"]},{"Key":"Product","Values":["Windows 10","Windows 7"]},{"Key":"Classification","Values":["Security Updates","Updates","Update Rollups","Critical Updates"]},{"Key":"Severity","Values":["Critical","Important","Moderate"]}],"ApproveAfterDays":7,"ApproveUntilDate":"","EnableNonSecurity":true,"ComplianceLevel":"Medium"}]}
     *
     * @var string
     */
    public $approvalRules;

    /**
     * @description The approved patches.
     *
     * @var string[]
     */
    public $approvedPatches;

    /**
     * @description Specifies whether the approved patch involves updates other than security-related updates.
     *
     * @example true
     *
     * @var bool
     */
    public $approvedPatchesEnableNonSecurity;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example -
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the patch baseline.
     *
     * @example PatchBaseline
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the patch baseline.
     *
     * This parameter is required.
     * @example MyPatchBaseline
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the operating system. Valid values:
     *
     *   Windows
     *   Ubuntu
     *   CentOS
     *   Debian
     *   AliyunLinux
     *   RedhatEnterpriseLinux
     *   Anolis
     *   AlmaLinux
     *
     * This parameter is required.
     * @example Windows
     *
     * @var string
     */
    public $operationSystem;

    /**
     * @description The ID of the region in which you want to create a patch baseline.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The rejected patches.
     *
     * @var string[]
     */
    public $rejectedPatches;

    /**
     * @description The action of the rejected patch.
     *
     * @example ALLOW_AS_DEPENDENCY
     *
     * @var string
     */
    public $rejectedPatchesAction;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The patch source configurations.
     *
     * @var string[]
     */
    public $sources;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'approvalRules'                    => 'ApprovalRules',
        'approvedPatches'                  => 'ApprovedPatches',
        'approvedPatchesEnableNonSecurity' => 'ApprovedPatchesEnableNonSecurity',
        'clientToken'                      => 'ClientToken',
        'description'                      => 'Description',
        'name'                             => 'Name',
        'operationSystem'                  => 'OperationSystem',
        'regionId'                         => 'RegionId',
        'rejectedPatches'                  => 'RejectedPatches',
        'rejectedPatchesAction'            => 'RejectedPatchesAction',
        'resourceGroupId'                  => 'ResourceGroupId',
        'sources'                          => 'Sources',
        'tags'                             => 'Tags',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operationSystem) {
            $res['OperationSystem'] = $this->operationSystem;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePatchBaselineRequest
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OperationSystem'])) {
            $model->operationSystem = $map['OperationSystem'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        return $model;
    }
}
