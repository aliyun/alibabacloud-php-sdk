<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsProgressResponseBody;

use AlibabaCloud\Tea\Model;

class apsHiveProgress extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $dbName;

    /**
     * @example 95
     *
     * @var string
     */
    public $progress;

    /**
     * @example 2
     *
     * @var string
     */
    public $speed;

    /**
     * @example test
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return apsHiveProgress
     */
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
