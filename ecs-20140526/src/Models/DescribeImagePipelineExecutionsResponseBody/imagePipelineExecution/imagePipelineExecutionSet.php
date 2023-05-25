<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelineExecutionsResponseBody\imagePipelineExecution;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelineExecutionsResponseBody\imagePipelineExecution\imagePipelineExecutionSet\tags;
use AlibabaCloud\Tea\Model;

class imagePipelineExecutionSet extends Model
{
    /**
     * @description The time when the image creation task was created.
     *
     * @example 2020-11-24T06:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the image creation task.
     *
     * @example exec-5fb8facb8ed7427c****
     *
     * @var string
     */
    public $executionId;

    /**
     * @description The ID of the image.
     *
     * @example m-bp67acfmxazb4p****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The ID of the image template.
     *
     * @example ip-2ze5tsl5bp6nf2b3****
     *
     * @var string
     */
    public $imagePipelineId;

    /**
     * @description The data that is returned.
     *
     * @example Create transition vpc "vpc-2ze70rc7093j9idu6****" success!
     *
     * @var string
     */
    public $message;

    /**
     * @description The last modification time of the image creation task.
     *
     * @example 2020-11-25T06:00:00Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the image creation task. Valid values:
     *
     *   BUILDING
     *   DISTRIBUTING
     *   RELEASING
     *   SUCCESS
     *   FAILED
     *   CANCELLING
     *   CANCELED
     *
     * @example BUILDING
     *
     * @var string
     */
    public $status;

    /**
     * @description > This parameter is unavailable.
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'creationTime'    => 'CreationTime',
        'executionId'     => 'ExecutionId',
        'imageId'         => 'ImageId',
        'imagePipelineId' => 'ImagePipelineId',
        'message'         => 'Message',
        'modifiedTime'    => 'ModifiedTime',
        'resourceGroupId' => 'ResourceGroupId',
        'status'          => 'Status',
        'tags'            => 'Tags',
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
        if (null !== $this->executionId) {
            $res['ExecutionId'] = $this->executionId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imagePipelineId) {
            $res['ImagePipelineId'] = $this->imagePipelineId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (isset($map['ExecutionId'])) {
            $model->executionId = $map['ExecutionId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImagePipelineId'])) {
            $model->imagePipelineId = $map['ImagePipelineId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
