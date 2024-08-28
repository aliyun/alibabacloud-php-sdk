<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20200710\Models;

use AlibabaCloud\Tea\Model;

class GetDeployDetailRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 30GRJUY95TMYWBYJ
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example 40
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $nextToken;

    /**
     * @example 1713597738
     *
     * @var string
     */
    public $refId;

    /**
     * @example rg-aekz44tg3bnpyba
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example vsw-xxxxxxxxxxxx
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example rgm-ecs
     *
     * @var string
     */
    public $resourceName;

    /**
     * @example ecs
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'appId'           => 'AppId',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'refId'           => 'RefId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceId'      => 'ResourceId',
        'resourceName'    => 'ResourceName',
        'resourceType'    => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->refId) {
            $res['RefId'] = $this->refId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeployDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RefId'])) {
            $model->refId = $map['RefId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
