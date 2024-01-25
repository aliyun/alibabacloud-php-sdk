<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentResponseBody\data;

use AlibabaCloud\Tea\Model;

class platform extends Model
{
    /**
     * @example amd64
     *
     * @var string
     */
    public $architecture;

    /**
     * @example linux
     *
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
     * @return platform
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
