<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dplus\V20201216\Models;

use AlibabaCloud\Tea\Model;

class SeleteCommodityByBToBRequest extends Model
{
    /**
     * @var int
     */
    public $num;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $start;
    protected $_name = [
        'num'   => 'Num',
        'pid'   => 'Pid',
        'query' => 'Query',
        'start' => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SeleteCommodityByBToBRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
