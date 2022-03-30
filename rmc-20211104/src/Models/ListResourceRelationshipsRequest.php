<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RMC\V20211104\Models;

use AlibabaCloud\Tea\Model;

class ListResourceRelationshipsRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $sourceRegionId;

    /**
     * @var string[]
     */
    public $sourceResourceId;

    /**
     * @var string
     */
    public $sourceResourceType;

    /**
     * @var string[]
     */
    public $targetResourceType;
    protected $_name = [
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'scene'              => 'Scene',
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
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
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
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
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
