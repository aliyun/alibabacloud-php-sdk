<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task;

use AlibabaCloud\Tea\Model;

class dependencies extends Model
{
    /**
     * @example Normal
     *
     * @var string
     */
    public $type;

    /**
     * @example pre.odps_sql_demo_0
     *
     * @var string
     */
    public $upstream;
    protected $_name = [
        'type'     => 'Type',
        'upstream' => 'Upstream',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->upstream) {
            $res['Upstream'] = $this->upstream;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dependencies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Upstream'])) {
            $model->upstream = $map['Upstream'];
        }

        return $model;
    }
}
