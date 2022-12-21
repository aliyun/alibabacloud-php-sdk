<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListIndexesRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @example 1
     *
     * @var string
     */
    public $tableId;

    /**
     * @example 0
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'logic'   => 'Logic',
        'tableId' => 'TableId',
        'tid'     => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIndexesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
