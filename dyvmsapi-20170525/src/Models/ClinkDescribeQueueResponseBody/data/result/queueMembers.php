<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeQueueResponseBody\data\result;

use AlibabaCloud\Dara\Model;

class queueMembers extends Model
{
    /**
     * @var string
     */
    public $cno;

    /**
     * @var int
     */
    public $penalty;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'cno' => 'Cno',
        'penalty' => 'Penalty',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->penalty) {
            $res['Penalty'] = $this->penalty;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['Penalty'])) {
            $model->penalty = $map['Penalty'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
