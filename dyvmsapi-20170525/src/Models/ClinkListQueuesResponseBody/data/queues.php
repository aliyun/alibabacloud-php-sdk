<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListQueuesResponseBody\data;

use AlibabaCloud\Dara\Model;

class queues extends Model
{
    /**
     * @var int
     */
    public $callClientNum;

    /**
     * @var int
     */
    public $chatClientNum;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $omniClientNum;

    /**
     * @var string
     */
    public $qno;
    protected $_name = [
        'callClientNum' => 'CallClientNum',
        'chatClientNum' => 'ChatClientNum',
        'id' => 'Id',
        'name' => 'Name',
        'omniClientNum' => 'OmniClientNum',
        'qno' => 'Qno',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callClientNum) {
            $res['CallClientNum'] = $this->callClientNum;
        }

        if (null !== $this->chatClientNum) {
            $res['ChatClientNum'] = $this->chatClientNum;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->omniClientNum) {
            $res['OmniClientNum'] = $this->omniClientNum;
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
        if (isset($map['CallClientNum'])) {
            $model->callClientNum = $map['CallClientNum'];
        }

        if (isset($map['ChatClientNum'])) {
            $model->chatClientNum = $map['ChatClientNum'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OmniClientNum'])) {
            $model->omniClientNum = $map['OmniClientNum'];
        }

        if (isset($map['Qno'])) {
            $model->qno = $map['Qno'];
        }

        return $model;
    }
}
