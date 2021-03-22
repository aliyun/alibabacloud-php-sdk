<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelineExecutionsResponseBody\imagePipelineExecution;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelineExecutionsResponseBody\imagePipelineExecution\imagePipelineExecutionSet\tags;
use AlibabaCloud\Tea\Model;

class imagePipelineExecutionSet extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $imagePipelineId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $executionId;
    protected $_name = [
        'creationTime'    => 'CreationTime',
        'imagePipelineId' => 'ImagePipelineId',
        'status'          => 'Status',
        'modifiedTime'    => 'ModifiedTime',
        'resourceGroupId' => 'ResourceGroupId',
        'message'         => 'Message',
        'tags'            => 'Tags',
        'imageId'         => 'ImageId',
        'executionId'     => 'ExecutionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->imagePipelineId) {
            $res['ImagePipelineId'] = $this->imagePipelineId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imagePipelineExecutionSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ImagePipelineId'])) {
            $model->imagePipelineId = $map['ImagePipelineId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }

        return $model;
    }
}
