<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\GetDedicatedIpWarmUpInfoResponseBody;

use AlibabaCloud\Dara\Model;

class info extends Model
{
    /**
     * @var string
     */
    public $esp;

    /**
     * @var bool
     */
    public $finished;
    protected $_name = [
        'esp' => 'Esp',
        'finished' => 'Finished',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->esp) {
            $res['Esp'] = $this->esp;
        }

        if (null !== $this->finished) {
            $res['Finished'] = $this->finished;
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
        if (isset($map['Esp'])) {
            $model->esp = $map['Esp'];
        }

        if (isset($map['Finished'])) {
            $model->finished = $map['Finished'];
        }

        return $model;
    }
}
