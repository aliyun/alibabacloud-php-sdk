<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBatchRepeatJobResponseBody;

use AlibabaCloud\Tea\Model;

class jobGroup extends Model
{
    /**
     * @example 254EB995-DEDF-48A4-9101-9CA5B72FFBCC
     *
     * @var string
     */
    public $id;

    /**
     * @example 1
     *
     * @var int
     */
    public $minConcurrency;

    /**
     * @example 3
     *
     * @var string
     */
    public $priority;

    /**
     * @example 30
     *
     * @var int
     */
    public $ringingDuration;
    protected $_name = [
        'id'              => 'Id',
        'minConcurrency'  => 'MinConcurrency',
        'priority'        => 'Priority',
        'ringingDuration' => 'RingingDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->minConcurrency) {
            $res['MinConcurrency'] = $this->minConcurrency;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->ringingDuration) {
            $res['RingingDuration'] = $this->ringingDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MinConcurrency'])) {
            $model->minConcurrency = $map['MinConcurrency'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RingingDuration'])) {
            $model->ringingDuration = $map['RingingDuration'];
        }

        return $model;
    }
}
