<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\UpdatePatchBaselineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\UpdatePatchBaselineResponseBody\patchBaseline\tags;

class patchBaseline extends Model
{
    /**
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
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $createdDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
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
     * @var string
     */
    public $updatedBy;

    /**
     * @var string
     */
    public $updatedDate;
    protected $_name = [
        'approvalRules' => 'ApprovalRules',
        'approvedPatches' => 'ApprovedPatches',
        'approvedPatchesEnableNonSecurity' => 'ApprovedPatchesEnableNonSecurity',
        'createdBy' => 'CreatedBy',
        'createdDate' => 'CreatedDate',
        'description' => 'Description',
        'id' => 'Id',
        'name' => 'Name',
        'operationSystem' => 'OperationSystem',
        'rejectedPatches' => 'RejectedPatches',
        'rejectedPatchesAction' => 'RejectedPatchesAction',
        'resourceGroupId' => 'ResourceGroupId',
        'shareType' => 'ShareType',
        'sources' => 'Sources',
        'tags' => 'Tags',
        'updatedBy' => 'UpdatedBy',
        'updatedDate' => 'UpdatedDate',
    ];

    public function validate()
    {
        if (\is_array($this->approvedPatches)) {
            Model::validateArray($this->approvedPatches);
        }
        if (\is_array($this->rejectedPatches)) {
            Model::validateArray($this->rejectedPatches);
        }
        if (\is_array($this->sources)) {
            Model::validateArray($this->sources);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approvalRules) {
            $res['ApprovalRules'] = $this->approvalRules;
        }

        if (null !== $this->approvedPatches) {
            if (\is_array($this->approvedPatches)) {
                $res['ApprovedPatches'] = [];
                $n1 = 0;
                foreach ($this->approvedPatches as $item1) {
                    $res['ApprovedPatches'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->operationSystem) {
            $res['OperationSystem'] = $this->operationSystem;
        }

        if (null !== $this->rejectedPatches) {
            if (\is_array($this->rejectedPatches)) {
                $res['RejectedPatches'] = [];
                $n1 = 0;
                foreach ($this->rejectedPatches as $item1) {
                    $res['RejectedPatches'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->sources)) {
                $res['Sources'] = [];
                $n1 = 0;
                foreach ($this->sources as $item1) {
                    $res['Sources'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (!empty($map['ApprovedPatches'])) {
                $model->approvedPatches = [];
                $n1 = 0;
                foreach ($map['ApprovedPatches'] as $item1) {
                    $model->approvedPatches[$n1++] = $item1;
                }
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OperationSystem'])) {
            $model->operationSystem = $map['OperationSystem'];
        }

        if (isset($map['RejectedPatches'])) {
            if (!empty($map['RejectedPatches'])) {
                $model->rejectedPatches = [];
                $n1 = 0;
                foreach ($map['RejectedPatches'] as $item1) {
                    $model->rejectedPatches[$n1++] = $item1;
                }
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
                $model->sources = [];
                $n1 = 0;
                foreach ($map['Sources'] as $item1) {
                    $model->sources[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
