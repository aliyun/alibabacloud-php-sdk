<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class SecurityContextCapabilities extends Model
{
    /**
     * @var string[]
     */
    public $add;

    /**
     * @var string[]
     */
    public $drop;
    protected $_name = [
        'add' => 'Add',
        'drop' => 'Drop',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->add) {
            $res['Add'] = $this->add;
        }
        if (null !== $this->drop) {
            $res['Drop'] = $this->drop;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SecurityContextCapabilities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Add'])) {
            if (!empty($map['Add'])) {
                $model->add = $map['Add'];
            }
        }
        if (isset($map['Drop'])) {
            if (!empty($map['Drop'])) {
                $model->drop = $map['Drop'];
            }
        }

        return $model;
    }
}
