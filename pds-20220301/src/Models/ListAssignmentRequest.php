<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ListAssignmentRequest extends Model
{
    /**
     * @description The maximum number of results to return. Valid values: 1 to 100.
     *
     * The number of returned results must be less than or equal to the specified number.
     * @example 50
     *
     * @var int
     */
    public $limit;

    /**
     * @description The ID of the managed resource, such as a group ID.
     *
     * @example 105***b82
     *
     * @var string
     */
    public $manageResourceId;

    /**
     * @description The type of the managed resource. Set the value to RT_Group, which specifies that the administrators of a group are queried.
     *
     * @example RT_Group
     *
     * @var string
     */
    public $manageResourceType;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of marker. By default, this parameter is empty.
     *
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $marker;
    protected $_name = [
        'limit'              => 'limit',
        'manageResourceId'   => 'manage_resource_id',
        'manageResourceType' => 'manage_resource_type',
        'marker'             => 'marker',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->manageResourceId) {
            $res['manage_resource_id'] = $this->manageResourceId;
        }
        if (null !== $this->manageResourceType) {
            $res['manage_resource_type'] = $this->manageResourceType;
        }
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAssignmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['manage_resource_id'])) {
            $model->manageResourceId = $map['manage_resource_id'];
        }
        if (isset($map['manage_resource_type'])) {
            $model->manageResourceType = $map['manage_resource_type'];
        }
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }

        return $model;
    }
}
