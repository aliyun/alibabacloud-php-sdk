<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ListIndexesRequest extends Model
{
    /**
     * @var bool
     */
    public $logic;

    /**
     * @var string
     */
    public $tableId;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'logic' => 'Logic',
        'tableId' => 'TableId',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
