<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayAndPauseControlRequest;

use AlibabaCloud\Dara\Model;

class openPlayAndPauseControlParam extends Model
{
    /**
     * @var string
     */
    public $openPlayAndPauseCommand;
    protected $_name = [
        'openPlayAndPauseCommand' => 'OpenPlayAndPauseCommand',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->openPlayAndPauseCommand) {
            $res['OpenPlayAndPauseCommand'] = $this->openPlayAndPauseCommand;
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
        if (isset($map['OpenPlayAndPauseCommand'])) {
            $model->openPlayAndPauseCommand = $map['OpenPlayAndPauseCommand'];
        }

        return $model;
    }
}
