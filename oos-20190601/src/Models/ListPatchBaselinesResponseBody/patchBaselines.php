<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListPatchBaselinesResponseBody;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListPatchBaselinesResponseBody\patchBaselines\tags;
use AlibabaCloud\Tea\Model;

class patchBaselines extends Model
{
    /**
     * @description The approved patches.
     *
     * @var string[]
     */
    public $approvedPatches;

    /**
     * @description Indicates whether the approved patch involves updates other than security-related updates.
     *
     * @example true
     *
     * @var bool
     */
    public $approvedPatchesEnableNonSecurity;

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
     * @example 2021-09-08T03:41:23Z
     *
     * @var string
     */
    public $createdDate;

    /**
     * @description The description of the patch baseline.
     *
     * @example ListPatchBaseline
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the patch baseline.
     *
     * @example pb-c2838b5d89b540e19ee6
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
     * @example MyPatchBaseline
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the operating system.
     *
     * @example AliyunLinux
     *
     * @var string
     */
    public $operationSystem;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek256ia6vhsndy
     *
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
     * @description The configurations of patch sources.
     *
     * @var string[]
     */
    public $sources;

    /**
     * @description The tags of the patch baseline.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The user who last updated the patch baseline.
     *
     * @example root(130900000)
     *
     * @var string
     */
    public $updatedBy;

    /**
     * @description The time when the patch baseline was updated.
     *
     * @example 2021-09-08T03:44:34Z
     *
     * @var string
     */
    public $updatedDate;
    protected $_name = [
        'approvedPatches'                  => 'ApprovedPatches',
        'approvedPatchesEnableNonSecurity' => 'ApprovedPatchesEnableNonSecurity',
        'createdBy'                        => 'CreatedBy',
        'createdDate'                      => 'CreatedDate',
        'description'                      => 'Description',
        'id'                               => 'Id',
        'isDefault'                        => 'IsDefault',
        'name'                             => 'Name',
        'operationSystem'                  => 'OperationSystem',
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
     * @return patchBaselines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
