<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class ConnectionStatus extends Model
{
    /**
     * @var Installation
     */
    public $installation;
    protected $_name = [
        'installation' => 'installation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->installation) {
            $res['installation'] = null !== $this->installation ? $this->installation->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConnectionStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['installation'])) {
            $model->installation = Installation::fromMap($map['installation']);
        }

        return $model;
    }
}
