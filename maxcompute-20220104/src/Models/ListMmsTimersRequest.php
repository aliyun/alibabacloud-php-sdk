<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class ListMmsTimersRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $srcDbName;

    /**
     * @var string
     */
    public $srcTableName;

    /**
     * @var bool
     */
    public $stopped;
    protected $_name = [
        'name' => 'name',
        'pageNum' => 'pageNum',
        'pageSize' => 'pageSize',
        'srcDbName' => 'srcDbName',
        'srcTableName' => 'srcTableName',
        'stopped' => 'stopped',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->srcDbName) {
            $res['srcDbName'] = $this->srcDbName;
        }

        if (null !== $this->srcTableName) {
            $res['srcTableName'] = $this->srcTableName;
        }

        if (null !== $this->stopped) {
            $res['stopped'] = $this->stopped;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['srcDbName'])) {
            $model->srcDbName = $map['srcDbName'];
        }

        if (isset($map['srcTableName'])) {
            $model->srcTableName = $map['srcTableName'];
        }

        if (isset($map['stopped'])) {
            $model->stopped = $map['stopped'];
        }

        return $model;
    }
}
