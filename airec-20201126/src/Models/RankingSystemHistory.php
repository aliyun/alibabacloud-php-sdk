<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\SDK\Airec\V20201126\Models\RankingSystemHistory\meta;
use AlibabaCloud\Tea\Model;

class RankingSystemHistory extends Model
{
    /**
     * @var meta
     */
    public $meta;

    /**
     * @example servicea
     *
     * @var string
     */
    public $name;

    /**
     * @example 8AC865AF-37D6-42ED-AA9A-B60D8ECDF640
     *
     * @var string
     */
    public $operateId;

    /**
     * @example 2021-12-06T03:01:41.217Z
     *
     * @var string
     */
    public $operateTime;

    /**
     * @example CONF_CHANGE
     *
     * @var string
     */
    public $operateType;
    protected $_name = [
        'meta'        => 'Meta',
        'name'        => 'Name',
        'operateId'   => 'OperateId',
        'operateTime' => 'OperateTime',
        'operateType' => 'OperateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->meta) {
            $res['Meta'] = null !== $this->meta ? $this->meta->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operateId) {
            $res['OperateId'] = $this->operateId;
        }
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RankingSystemHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Meta'])) {
            $model->meta = meta::fromMap($map['Meta']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OperateId'])) {
            $model->operateId = $map['OperateId'];
        }
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }

        return $model;
    }
}
