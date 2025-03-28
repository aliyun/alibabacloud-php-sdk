<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

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
        if (null !== $this->installation) {
            $this->installation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->installation) {
            $res['installation'] = null !== $this->installation ? $this->installation->toArray($noStream) : $this->installation;
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
        if (isset($map['installation'])) {
            $model->installation = Installation::fromMap($map['installation']);
        }

        return $model;
    }
}
