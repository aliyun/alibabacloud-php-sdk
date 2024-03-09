<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models\ListHpoTrialCommandsResponseBody;

use AlibabaCloud\Tea\Model;

class commands extends Model
{
    /**
     * @example dlc submit pytorch --name=test_nni_foo_bar
     *
     * @var string
     */
    public $command;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example foo
     *
     * @var string
     */
    public $output;
    protected $_name = [
        'command' => 'Command',
        'id'      => 'Id',
        'output'  => 'Output',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commands
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        return $model;
    }
}
