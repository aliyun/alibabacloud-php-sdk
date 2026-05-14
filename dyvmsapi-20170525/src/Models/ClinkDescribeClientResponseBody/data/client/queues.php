<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeClientResponseBody\data\client;

use AlibabaCloud\Dara\Model;

class queues extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $penalty;

    /**
     * @var string
     */
    public $qno;
    protected $_name = [
        'name' => 'Name',
        'penalty' => 'Penalty',
        'qno' => 'Qno',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->penalty) {
            $res['Penalty'] = $this->penalty;
        }

        if (null !== $this->qno) {
            $res['Qno'] = $this->qno;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Penalty'])) {
            $model->penalty = $map['Penalty'];
        }

        if (isset($map['Qno'])) {
            $model->qno = $map['Qno'];
        }

        return $model;
    }
}
