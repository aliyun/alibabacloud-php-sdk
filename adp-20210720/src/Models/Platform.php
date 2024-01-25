<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class Platform extends Model
{
    /**
     * @var string
     */
    public $architecture;

    /**
     * @var string
     */
    public $os;
    protected $_name = [
        'architecture' => 'architecture',
        'os'           => 'os',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['architecture'] = $this->architecture;
        }
        if (null !== $this->os) {
            $res['os'] = $this->os;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Platform
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['architecture'])) {
            $model->architecture = $map['architecture'];
        }
        if (isset($map['os'])) {
            $model->os = $map['os'];
        }

        return $model;
    }
}
