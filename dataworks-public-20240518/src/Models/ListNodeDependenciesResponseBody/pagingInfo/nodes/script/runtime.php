<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodeDependenciesResponseBody\pagingInfo\nodes\script;

use AlibabaCloud\Tea\Model;

class runtime extends Model
{
    /**
     * @description The command used to distinguish node types.
     *
     * @example ODPS_SQL
     *
     * @var string
     */
    public $command;
    protected $_name = [
        'command' => 'Command',
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
