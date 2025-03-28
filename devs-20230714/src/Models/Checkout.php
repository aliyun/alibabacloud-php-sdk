<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class Checkout extends Model
{
    /**
     * @var string
     */
    public $ref;

    /**
     * @var string
     */
    public $remote;
    protected $_name = [
        'ref' => 'ref',
        'remote' => 'remote',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ref) {
            $res['ref'] = $this->ref;
        }

        if (null !== $this->remote) {
            $res['remote'] = $this->remote;
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
        if (isset($map['ref'])) {
            $model->ref = $map['ref'];
        }

        if (isset($map['remote'])) {
            $model->remote = $map['remote'];
        }

        return $model;
    }
}
