<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class PutLayerACLRequest extends Model
{
    /**
     * @var string
     */
    public $acl;

    /**
     * @var string
     */
    public $public;
    protected $_name = [
        'acl' => 'acl',
        'public' => 'public',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acl) {
            $res['acl'] = $this->acl;
        }

        if (null !== $this->public) {
            $res['public'] = $this->public;
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
        if (isset($map['acl'])) {
            $model->acl = $map['acl'];
        }

        if (isset($map['public'])) {
            $model->public = $map['public'];
        }

        return $model;
    }
}
