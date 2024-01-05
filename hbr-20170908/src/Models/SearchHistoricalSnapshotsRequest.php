<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class SearchHistoricalSnapshotsRequest extends Model
{
    /**
     * @description The maximum number of rows that you want the current query to return. To query only the number of matched rows without the need to return specific data, you can set the Limit parameter to `0`. Then, the operation returns only the number of matched rows.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description The token that is required to obtain the next page of backup snapshots.
     *
     * @example caeba0bbb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $order;

    /**
     * @description The query conditions. Example:
     *
     * "field": "VaultId",
     * "value": "v-0003rf9m*****qx5",
     * "field": "InstanceId",
     * "value": "i-bp1i20zq2*****e9368m",
     * "field": "PlanId",
     * "value": "plan-0005vk*****gkd1iu4f",
     * ]
     *
     *   The following fields are supported:
     *
     *   VaultId: specifies the ID of the backup vault. This field is required.
     *   InstanceId: specifies the ID of the ECS instance. If the SourceType parameter is set to ECS_FILE, this field is required.
     *   Bucket: specifies the ID of the OSS bucket. If the SourceType parameter is set to OSS, this field is required.
     *   FileSystemId: specifies the ID of the NAS file system. If the SourceType parameter is set to NAS, this field is required.
     *   CreateTime: specifies the time when the NAS file system was created. If the SourceType parameter is set to NAS, this field is required.
     *   CompleteTime: specifies the time when the backup snapshot was completed.
     *   PlanId: the ID of a backup plan.
     *
     *   The following operations are supported:
     *
     *   MATCH_TERM: exact match.
     *   GREATER_THAN: greater than.
     *   GREATER_THAN_OR_EQUAL: greater than or equal to.
     *   LESS_THAN: less than.
     *   LESS_THAN_OR_EQUAL: less than or equal to.
     *   BETWEEN: specifies a JSON array as a range. The results must fall within the range in the `[Minimum value,Maximum value]` format.
     *   IN: specifies an array as a collection. The results must fall within the collection.
     *   NOT_IN: specifies an array as a collection. The results cannot fall within the collection.
     *
     * @example [   {     "field": "VaultId",     "value": "v-0003rf9m17pap3ltpqx5",     "operation": "MATCH_TERM"   },   {     "field": "InstanceId",     "value": "i-bp1i20zq2wuzdie9368m",     "operation": "MATCH_TERM"   },   {     "field": "PlanId",     "value": "plan-0005vkqhpesqgkd1iu4f",     "operation": "MATCH_TERM"   },   {     "field": "CompleteTime",     "value": 1626769913,     "operation": "GREATER_THAN_OR_EQUAL"   } ]
     *
     * @var mixed[]
     */
    public $query;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @description The type of the data source. Valid values:
     *
     *   **ECS_FILE**: backup snapshots for Elastic Compute Service (ECS) files
     *   **OSS**: backup snapshots for Object Storage Service (OSS) buckets
     *   **NAS**: backup snapshots for Apsara File Storage NAS file systems
     *
     * @example ECS_FILE
     *
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'limit'      => 'Limit',
        'nextToken'  => 'NextToken',
        'order'      => 'Order',
        'query'      => 'Query',
        'sortBy'     => 'SortBy',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchHistoricalSnapshotsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['Query'])) {
            if (!empty($map['Query'])) {
                $model->query = $map['Query'];
            }
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
