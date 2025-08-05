<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class AkSkIdentityConfig extends Model
{
    /**
     * @var string
     */
    public $ak;

    /**
     * @var string
     */
    public $generateMode;

    /**
     * @var string
     */
    public $sk;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'ak' => 'ak',
        'generateMode' => 'generateMode',
        'sk' => 'sk',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ak) {
            $res['ak'] = $this->ak;
        }

        if (null !== $this->generateMode) {
            $res['generateMode'] = $this->generateMode;
        }

        if (null !== $this->sk) {
            $res['sk'] = $this->sk;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['ak'])) {
            $model->ak = $map['ak'];
        }

        if (isset($map['generateMode'])) {
            $model->generateMode = $map['generateMode'];
        }

        if (isset($map['sk'])) {
            $model->sk = $map['sk'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
