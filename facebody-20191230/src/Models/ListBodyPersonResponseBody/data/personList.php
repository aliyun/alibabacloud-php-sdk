<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\ListBodyPersonResponseBody\data;

use AlibabaCloud\Tea\Model;

class personList extends Model
{
    /**
     * @description 数据库ID
     *
     * @var int
     */
    public $dbId;

    /**
     * @description 人员ID
     *
     * @var int
     */
    public $id;

    /**
     * @description 人员名称
     *
     * @var string
     */
    public $name;

    /**
     * @description Trace数量
     *
     * @var int
     */
    public $traceCount;
    protected $_name = [
        'dbId'       => 'DbId',
        'id'         => 'Id',
        'name'       => 'Name',
        'traceCount' => 'TraceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->traceCount) {
            $res['TraceCount'] = $this->traceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return personList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TraceCount'])) {
            $model->traceCount = $map['TraceCount'];
        }

        return $model;
    }
}
