<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ListFacegroupsRequest extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @example 100
     *
     * @var int
     */
    public $limit;

    /**
     * @example NWQ1Yjk4YmI1ZDRlYmU1Y2E0YWE0NmJhYWJmODBhNDQ2NzhlMTRhMg
     *
     * @var string
     */
    public $marker;

    /**
     * @var string
     */
    public $remarks;

    /**
     * @var bool
     */
    public $returnTotalCount;
    protected $_name = [
        'driveId'          => 'drive_id',
        'limit'            => 'limit',
        'marker'           => 'marker',
        'remarks'          => 'remarks',
        'returnTotalCount' => 'return_total_count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }
        if (null !== $this->remarks) {
            $res['remarks'] = $this->remarks;
        }
        if (null !== $this->returnTotalCount) {
            $res['return_total_count'] = $this->returnTotalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFacegroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }
        if (isset($map['remarks'])) {
            $model->remarks = $map['remarks'];
        }
        if (isset($map['return_total_count'])) {
            $model->returnTotalCount = $map['return_total_count'];
        }

        return $model;
    }
}
