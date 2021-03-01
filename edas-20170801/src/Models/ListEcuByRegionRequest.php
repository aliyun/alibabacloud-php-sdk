<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListEcuByRegionRequest extends Model
{
    /**
     * @var string
     */
    public $logicalRegionId;

    /**
     * @var string
     */
    public $act;
    protected $_name = [
        'logicalRegionId' => 'LogicalRegionId',
        'act'             => 'Act',
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
        if (null !== $this->act) {
            $res['Act'] = $this->act;
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
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }
        if (isset($map['Act'])) {
            $model->act = $map['Act'];
        }

        return $model;
    }
}
