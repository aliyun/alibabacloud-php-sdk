<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PlayAndPauseControlRequest;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openPlayAndPauseCommand) {
            $res['OpenPlayAndPauseCommand'] = $this->openPlayAndPauseCommand;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return openPlayAndPauseControlParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpenPlayAndPauseCommand'])) {
            $model->openPlayAndPauseCommand = $map['OpenPlayAndPauseCommand'];
        }

        return $model;
    }
}
