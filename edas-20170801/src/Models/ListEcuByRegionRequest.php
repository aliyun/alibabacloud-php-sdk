<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListEcuByRegionRequest extends Model
{
    /**
     * @description Set the value to `pop-query`.
     *
     * @example pop-query
     *
     * @var string
     */
    public $act;

    /**
     * @description The ID of the namespace.
     *
     *   The ID of a custom namespace is in the `region ID:namespace identifier` format. Example: cn-beijing:tdy218.
     *   The ID of the default namespace is in the `region ID` format. Example: cn-beijing.
     *
     * @example cn-beijing or cn-beijing:tdy218
     *
     * @var string
     */
    public $logicalRegionId;
    protected $_name = [
        'act'             => 'Act',
        'logicalRegionId' => 'LogicalRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->act) {
            $res['Act'] = $this->act;
        }
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEcuByRegionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Act'])) {
            $model->act = $map['Act'];
        }
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }

        return $model;
    }
}
