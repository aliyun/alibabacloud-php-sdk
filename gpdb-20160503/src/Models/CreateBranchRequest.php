<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateBranchRequest\tag;

class CreateBranchRequest extends Model
{
    /**
     * @var string
     */
    public $branchName;

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
    public $expiresAt;

    /**
     * @var string
     */
    public $initSource;

    /**
     * @var string
     */
    public $parentBranchId;

    /**
     * @var string
     */
    public $parentLsn;

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
    public $regionId;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'branchName' => 'BranchName',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'expiresAt' => 'ExpiresAt',
        'initSource' => 'InitSource',
        'parentBranchId' => 'ParentBranchId',
        'parentLsn' => 'ParentLsn',
        'parentTimestamp' => 'ParentTimestamp',
        'projectId' => 'ProjectId',
        'protected' => 'Protected',
        'regionId' => 'RegionId',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->branchName) {
            $res['BranchName'] = $this->branchName;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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

        if (null !== $this->parentBranchId) {
            $res['ParentBranchId'] = $this->parentBranchId;
        }

        if (null !== $this->parentLsn) {
            $res['ParentLsn'] = $this->parentLsn;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BranchName'])) {
            $model->branchName = $map['BranchName'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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

        if (isset($map['ParentBranchId'])) {
            $model->parentBranchId = $map['ParentBranchId'];
        }

        if (isset($map['ParentLsn'])) {
            $model->parentLsn = $map['ParentLsn'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
