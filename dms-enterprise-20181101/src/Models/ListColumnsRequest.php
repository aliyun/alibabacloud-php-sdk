<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListColumnsRequest extends Model
{
    /**
     * @var int
     */
    public $tid;

    /**
     * @var string
     */
    public $tableId;

    /**
     * @var bool
     */
    public $logic;
    protected $_name = [
        'tid'     => 'Tid',
        'tableId' => 'TableId',
        'logic'   => 'Logic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListColumnsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }

        return $model;
    }
}
