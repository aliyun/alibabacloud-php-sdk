<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class ListTagCloudResourcesRequest extends Model
{
    /**
     * @description The number of entries per page. Maximum value: 1000. Default value: 50.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example ptnJAAAAAAAxNzE5OTEwNQ==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The resource IDs. You can specify up to 50 resource IDs. You do not need to specify this parameter if you set ResourceType to AliUid.
     *
     * @var string[]
     */
    public $resourceIds;

    /**
     * @description The type of the cloud resource.
     *
     * Valid values:
     *
     *   AppId: app ID.
     *   WyId: Alibaba Cloud Workspace user ID.
     *   AppInstanceGroupId: delivery group ID.
     *   AliUid: tenant ID.
     *
     * This parameter is required.
     * @example AppInstanceGroupId
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tag type.
     *
     * Valid values:
     *
     *   All (default): all tags.
     *   Custom: custom tag.
     *   System: system tag.
     *
     * @example Custom
     *
     * @var string
     */
    public $scope;
    protected $_name = [
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'resourceIds'  => 'ResourceIds',
        'resourceType' => 'ResourceType',
        'scope'        => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagCloudResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = $map['ResourceIds'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
