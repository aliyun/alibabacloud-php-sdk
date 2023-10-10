<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class QueryMigrateEcuListRequest extends Model
{
    /**
     * @description The ID of the namespace.
     *
     *   The ID of a custom namespace is in the `region ID:namespace identifier` format. Example: `cn-beijing:test`.
     *   The ID of the default namespace is in the `region ID` format. Example: `cn-beijing`.
     *
     * @example cn-hangzhou or cn-hangzhou:test
     *
     * @var string
     */
    public $logicalRegionId;
    protected $_name = [
        'logicalRegionId' => 'LogicalRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMigrateEcuListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }

        return $model;
    }
}
