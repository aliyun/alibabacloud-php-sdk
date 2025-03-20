<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListFunctionsResponseBody\pagingInfo\functions\script;

use AlibabaCloud\Tea\Model;

class runtime extends Model
{
    /**
     * @description The command.
     *
     * @example ODPS_FUNCTION
     *
     * @var string
     */
    public $command;
    protected $_name = [
        'command' => 'Command',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runtime
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        return $model;
    }
}
