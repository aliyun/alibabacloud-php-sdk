<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketHmacConfig;

use AlibabaCloud\Dara\Model;

class credentials extends Model
{
    /**
     * @var string
     */
    public $ak;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $sk;
    protected $_name = [
        'ak' => 'ak',
        'mode' => 'mode',
        'sk' => 'sk',
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

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        if (null !== $this->sk) {
            $res['sk'] = $this->sk;
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

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        if (isset($map['sk'])) {
            $model->sk = $map['sk'];
        }

        return $model;
    }
}
