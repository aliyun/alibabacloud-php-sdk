<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UpdatePatchBaselineShrinkRequest extends Model
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
     * @var string
     */
    public $approvedPatchesShrink;

    /**
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
     * @example UpdatePatchBaseline
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the patch baseline.
     *
     * @example MyPatchBaseline
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $rejectedPatchesShrink;

    /**
     * @var string
     */
    public $rejectedPatchesAction;

    /**
     * @var string
     */
    public $sourcesShrink;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'approvalRules'                    => 'ApprovalRules',
        'approvedPatchesShrink'            => 'ApprovedPatches',
        'approvedPatchesEnableNonSecurity' => 'ApprovedPatchesEnableNonSecurity',
        'clientToken'                      => 'ClientToken',
        'description'                      => 'Description',
        'name'                             => 'Name',
        'regionId'                         => 'RegionId',
        'rejectedPatchesShrink'            => 'RejectedPatches',
        'rejectedPatchesAction'            => 'RejectedPatchesAction',
        'sourcesShrink'                    => 'Sources',
        'tagsShrink'                       => 'Tags',
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
        if (null !== $this->approvedPatchesShrink) {
            $res['ApprovedPatches'] = $this->approvedPatchesShrink;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->rejectedPatchesShrink) {
            $res['RejectedPatches'] = $this->rejectedPatchesShrink;
        }
        if (null !== $this->rejectedPatchesAction) {
            $res['RejectedPatchesAction'] = $this->rejectedPatchesAction;
        }
        if (null !== $this->sourcesShrink) {
            $res['Sources'] = $this->sourcesShrink;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePatchBaselineShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovalRules'])) {
            $model->approvalRules = $map['ApprovalRules'];
        }
        if (isset($map['ApprovedPatches'])) {
            $model->approvedPatchesShrink = $map['ApprovedPatches'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RejectedPatches'])) {
            $model->rejectedPatchesShrink = $map['RejectedPatches'];
        }
        if (isset($map['RejectedPatchesAction'])) {
            $model->rejectedPatchesAction = $map['RejectedPatchesAction'];
        }
        if (isset($map['Sources'])) {
            $model->sourcesShrink = $map['Sources'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
