<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DescribeTaskRequest extends Model
{
    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmvywqfey5njq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the job.
     *
     * @example t-*********************
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The access token.
     *
     * @example 01W3ZZOQ
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'resourceGroupId' => 'ResourceGroupId',
        'taskId'          => 'TaskId',
        'token'           => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
