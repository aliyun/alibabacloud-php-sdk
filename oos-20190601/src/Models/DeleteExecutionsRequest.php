<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class DeleteExecutionsRequest extends Model
{
    /**
     * @var string
     */
    public $executionIds;

    /**
     * @var bool
     */
    public $force;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'executionIds' => 'ExecutionIds',
        'force' => 'Force',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executionIds) {
            $res['ExecutionIds'] = $this->executionIds;
        }

        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionIds'])) {
            $model->executionIds = $map['ExecutionIds'];
        }

        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
