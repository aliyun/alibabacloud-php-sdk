<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class CreatePatchBaselineShrinkRequest extends Model
{
    /**
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
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operationSystem;

    /**
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
    public $resourceGroupId;

    /**
     * @var string
     */
    public $sourcesShrink;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'approvalRules' => 'ApprovalRules',
        'approvedPatchesShrink' => 'ApprovedPatches',
        'approvedPatchesEnableNonSecurity' => 'ApprovedPatchesEnableNonSecurity',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'name' => 'Name',
        'operationSystem' => 'OperationSystem',
        'regionId' => 'RegionId',
        'rejectedPatchesShrink' => 'RejectedPatches',
        'rejectedPatchesAction' => 'RejectedPatchesAction',
        'resourceGroupId' => 'ResourceGroupId',
        'sourcesShrink' => 'Sources',
        'tagsShrink' => 'Tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->operationSystem) {
            $res['OperationSystem'] = $this->operationSystem;
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->sourcesShrink) {
            $res['Sources'] = $this->sourcesShrink;
        }

        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
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

        if (isset($map['OperationSystem'])) {
            $model->operationSystem = $map['OperationSystem'];
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
