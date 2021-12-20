<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLogicDatabaseRequest extends Model
{
    /**
     * @var int
     */
    public $logicDbId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'logicDbId' => 'LogicDbId',
        'regionId'  => 'RegionId',
        'tid'       => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logicDbId) {
            $res['LogicDbId'] = $this->logicDbId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLogicDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogicDbId'])) {
            $model->logicDbId = $map['LogicDbId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
