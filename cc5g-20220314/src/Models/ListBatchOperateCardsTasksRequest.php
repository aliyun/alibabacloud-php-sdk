<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class ListBatchOperateCardsTasksRequest extends Model
{
    /**
     * @var string[]
     */
    public $batchOperateCardsTaskIds;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string[]
     */
    public $names;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $statuses;
    protected $_name = [
        'batchOperateCardsTaskIds' => 'BatchOperateCardsTaskIds',
        'maxResults'               => 'MaxResults',
        'names'                    => 'Names',
        'nextToken'                => 'NextToken',
        'regionId'                 => 'RegionId',
        'statuses'                 => 'Statuses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchOperateCardsTaskIds) {
            $res['BatchOperateCardsTaskIds'] = $this->batchOperateCardsTaskIds;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBatchOperateCardsTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchOperateCardsTaskIds'])) {
            if (!empty($map['BatchOperateCardsTaskIds'])) {
                $model->batchOperateCardsTaskIds = $map['BatchOperateCardsTaskIds'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Names'])) {
            if (!empty($map['Names'])) {
                $model->names = $map['Names'];
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = $map['Statuses'];
            }
        }

        return $model;
    }
}
