<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsProgressResponseBody;

use AlibabaCloud\Dara\Model;

class apsHiveProgress extends Model
{
    /**
     * @var string
     */
    public $dbName;
    /**
     * @var string
     */
    public $progress;
    /**
     * @var string
     */
    public $speed;
    /**
     * @var string
     */
    public $tbName;
    protected $_name = [
        'dbName'   => 'DbName',
        'progress' => 'Progress',
        'speed'    => 'Speed',
        'tbName'   => 'TbName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }

        if (null !== $this->tbName) {
            $res['TbName'] = $this->tbName;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }

        if (isset($map['TbName'])) {
            $model->tbName = $map['TbName'];
        }

        return $model;
    }
}
