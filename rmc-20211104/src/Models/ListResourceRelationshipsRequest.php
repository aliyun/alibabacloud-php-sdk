<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RMC\V20211104\Models;

use AlibabaCloud\Tea\Model;

class ListResourceRelationshipsRequest extends Model
{
    /**
     * @description The maximum number of entries to return on each page.
     *
     * Default value: 20.
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to initiate the next request.
     *
     * If the total number of entries returned for the current request exceeds the value of the `MaxResults` parameter, the entries are truncated. In this case, you can use the token to initiate another request and obtain the remaining entries.
     * @example eyJzZWFyY2hBZnRlcnMiOlsiMTAwMTU2Nzk4MTU1OSJd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID of the resource whose associated resources you want to query.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $sourceRegionId;

    /**
     * @description The IDs of the resource whose associated resources you want to query.
     *
     * You can specify a maximum of 10 resource IDs.
     * @var string[]
     */
    public $sourceResourceId;

    /**
     * @description The type of the resource whose associated resources you want to query.
     *
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $sourceResourceType;

    /**
     * @description The types of the associated resources that you want to query.
     *
     * You can specify a maximum of 10 resource types.
     * @var string[]
     */
    public $targetResourceType;
    protected $_name = [
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'sourceRegionId'     => 'SourceRegionId',
        'sourceResourceId'   => 'SourceResourceId',
        'sourceResourceType' => 'SourceResourceType',
        'targetResourceType' => 'TargetResourceType',
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
        if (null !== $this->sourceRegionId) {
            $res['SourceRegionId'] = $this->sourceRegionId;
        }
        if (null !== $this->sourceResourceId) {
            $res['SourceResourceId'] = $this->sourceResourceId;
        }
        if (null !== $this->sourceResourceType) {
            $res['SourceResourceType'] = $this->sourceResourceType;
        }
        if (null !== $this->targetResourceType) {
            $res['TargetResourceType'] = $this->targetResourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceRelationshipsRequest
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
        if (isset($map['SourceRegionId'])) {
            $model->sourceRegionId = $map['SourceRegionId'];
        }
        if (isset($map['SourceResourceId'])) {
            if (!empty($map['SourceResourceId'])) {
                $model->sourceResourceId = $map['SourceResourceId'];
            }
        }
        if (isset($map['SourceResourceType'])) {
            $model->sourceResourceType = $map['SourceResourceType'];
        }
        if (isset($map['TargetResourceType'])) {
            if (!empty($map['TargetResourceType'])) {
                $model->targetResourceType = $map['TargetResourceType'];
            }
        }

        return $model;
    }
}
