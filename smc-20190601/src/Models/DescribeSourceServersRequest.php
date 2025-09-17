<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersRequest\tag;

class DescribeSourceServersRequest extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $relatedJobType;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string[]
     */
    public $sourceId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $workgroupId;
    protected $_name = [
        'jobId' => 'JobId',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'relatedJobType' => 'RelatedJobType',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'sourceId' => 'SourceId',
        'state' => 'State',
        'tag' => 'Tag',
        'workgroupId' => 'WorkgroupId',
    ];

    public function validate()
    {
        if (\is_array($this->relatedJobType)) {
            Model::validateArray($this->relatedJobType);
        }
        if (\is_array($this->sourceId)) {
            Model::validateArray($this->sourceId);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->relatedJobType) {
            if (\is_array($this->relatedJobType)) {
                $res['RelatedJobType'] = [];
                $n1 = 0;
                foreach ($this->relatedJobType as $item1) {
                    $res['RelatedJobType'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->sourceId) {
            if (\is_array($this->sourceId)) {
                $res['SourceId'] = [];
                $n1 = 0;
                foreach ($this->sourceId as $item1) {
                    $res['SourceId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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

        if (null !== $this->workgroupId) {
            $res['WorkgroupId'] = $this->workgroupId;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RelatedJobType'])) {
            if (!empty($map['RelatedJobType'])) {
                $model->relatedJobType = [];
                $n1 = 0;
                foreach ($map['RelatedJobType'] as $item1) {
                    $model->relatedJobType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['SourceId'])) {
            if (!empty($map['SourceId'])) {
                $model->sourceId = [];
                $n1 = 0;
                foreach ($map['SourceId'] as $item1) {
                    $model->sourceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
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

        if (isset($map['WorkgroupId'])) {
            $model->workgroupId = $map['WorkgroupId'];
        }

        return $model;
    }
}
