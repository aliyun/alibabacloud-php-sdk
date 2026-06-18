<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeBranchResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeBranchResponseBody\branch\tags;

class branch extends Model
{
    /**
     * @var string
     */
    public $branchId;

    /**
     * @var string
     */
    public $branchName;

    /**
     * @var string
     */
    public $computeEndpoint;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expiresAt;

    /**
     * @var string
     */
    public $initSource;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $parentBranchId;

    /**
     * @var string
     */
    public $parentBranchName;

    /**
     * @var string
     */
    public $parentLSN;

    /**
     * @var string
     */
    public $parentTimestamp;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var bool
     */
    public $protected;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'branchId' => 'BranchId',
        'branchName' => 'BranchName',
        'computeEndpoint' => 'ComputeEndpoint',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'expiresAt' => 'ExpiresAt',
        'initSource' => 'InitSource',
        'isDefault' => 'IsDefault',
        'parentBranchId' => 'ParentBranchId',
        'parentBranchName' => 'ParentBranchName',
        'parentLSN' => 'ParentLSN',
        'parentTimestamp' => 'ParentTimestamp',
        'projectId' => 'ProjectId',
        'protected' => 'Protected',
        'serviceType' => 'ServiceType',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->branchId) {
            $res['BranchId'] = $this->branchId;
        }

        if (null !== $this->branchName) {
            $res['BranchName'] = $this->branchName;
        }

        if (null !== $this->computeEndpoint) {
            $res['ComputeEndpoint'] = $this->computeEndpoint;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->expiresAt) {
            $res['ExpiresAt'] = $this->expiresAt;
        }

        if (null !== $this->initSource) {
            $res['InitSource'] = $this->initSource;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->parentBranchId) {
            $res['ParentBranchId'] = $this->parentBranchId;
        }

        if (null !== $this->parentBranchName) {
            $res['ParentBranchName'] = $this->parentBranchName;
        }

        if (null !== $this->parentLSN) {
            $res['ParentLSN'] = $this->parentLSN;
        }

        if (null !== $this->parentTimestamp) {
            $res['ParentTimestamp'] = $this->parentTimestamp;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->protected) {
            $res['Protected'] = $this->protected;
        }

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BranchId'])) {
            $model->branchId = $map['BranchId'];
        }

        if (isset($map['BranchName'])) {
            $model->branchName = $map['BranchName'];
        }

        if (isset($map['ComputeEndpoint'])) {
            $model->computeEndpoint = $map['ComputeEndpoint'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExpiresAt'])) {
            $model->expiresAt = $map['ExpiresAt'];
        }

        if (isset($map['InitSource'])) {
            $model->initSource = $map['InitSource'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['ParentBranchId'])) {
            $model->parentBranchId = $map['ParentBranchId'];
        }

        if (isset($map['ParentBranchName'])) {
            $model->parentBranchName = $map['ParentBranchName'];
        }

        if (isset($map['ParentLSN'])) {
            $model->parentLSN = $map['ParentLSN'];
        }

        if (isset($map['ParentTimestamp'])) {
            $model->parentTimestamp = $map['ParentTimestamp'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Protected'])) {
            $model->protected = $map['Protected'];
        }

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
