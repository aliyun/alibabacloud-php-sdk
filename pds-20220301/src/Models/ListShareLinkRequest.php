<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ListShareLinkRequest extends Model
{
    /**
     * @description The creator of the share.
     *
     * @example c9b7a5aa04d14ae3867fdc886fa01da4
     *
     * @var string
     */
    public $creator;

    /**
     * @description Specifies whether to return the shares that are canceled.
     *
     * @example true
     *
     * @var bool
     */
    public $includeCancelled;

    /**
     * @description The maximum number of results to return. Valid values: 0 to 100.
     *
     * The number of returned results must be less than or equal to the specified number.
     * @example 50
     *
     * @var int
     */
    public $limit;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of marker.\
     * By default, this parameter is left empty.
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $marker;

    /**
     * @description The field by which to sort the returned results. Default value: created_at. Valid values:
     *
     *   share_name: sorts the results by the name of the share.
     *   updated_at: sorts the results by the time when the share was modified.
     *   description: sorts the results by the description of the share.
     *   created_at: sorts the results by the time when the share was created.
     *
     * @example share_name
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The order in which you want to sort the returned results. By default, order_direction is set to DESC if order_by is set to created_at or updated_at, and is set to ASC if order_by is set to other values. Valid values:
     *
     *   ASC: sorts the results in ascending order.
     *   DESC: sorts the results in descending order.
     *
     * @example ASC
     *
     * @var string
     */
    public $orderDirection;
    protected $_name = [
        'creator'          => 'creator',
        'includeCancelled' => 'include_cancelled',
        'limit'            => 'limit',
        'marker'           => 'marker',
        'orderBy'          => 'order_by',
        'orderDirection'   => 'order_direction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->includeCancelled) {
            $res['include_cancelled'] = $this->includeCancelled;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }
        if (null !== $this->orderBy) {
            $res['order_by'] = $this->orderBy;
        }
        if (null !== $this->orderDirection) {
            $res['order_direction'] = $this->orderDirection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListShareLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['include_cancelled'])) {
            $model->includeCancelled = $map['include_cancelled'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }
        if (isset($map['order_by'])) {
            $model->orderBy = $map['order_by'];
        }
        if (isset($map['order_direction'])) {
            $model->orderDirection = $map['order_direction'];
        }

        return $model;
    }
}
