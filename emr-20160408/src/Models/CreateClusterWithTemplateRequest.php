<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterWithTemplateRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $templateBizId;

    /**
     * @var string
     */
    public $uniqueTag;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'templateBizId'   => 'TemplateBizId',
        'uniqueTag'       => 'UniqueTag',
        'clusterName'     => 'ClusterName',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->templateBizId) {
            $res['TemplateBizId'] = $this->templateBizId;
        }
        if (null !== $this->uniqueTag) {
            $res['UniqueTag'] = $this->uniqueTag;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterWithTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TemplateBizId'])) {
            $model->templateBizId = $map['TemplateBizId'];
        }
        if (isset($map['UniqueTag'])) {
            $model->uniqueTag = $map['UniqueTag'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
