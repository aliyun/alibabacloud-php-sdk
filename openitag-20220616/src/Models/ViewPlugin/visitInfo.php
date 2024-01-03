<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models\ViewPlugin;

use AlibabaCloud\Tea\Model;

class visitInfo extends Model
{
    /**
     * @var mixed[]
     */
    public $aftsConf;

    /**
     * @var mixed[]
     */
    public $ossConf;
    protected $_name = [
        'aftsConf' => 'aftsConf',
        'ossConf'  => 'ossConf',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aftsConf) {
            $res['aftsConf'] = $this->aftsConf;
        }
        if (null !== $this->ossConf) {
            $res['ossConf'] = $this->ossConf;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return visitInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aftsConf'])) {
            $model->aftsConf = $map['aftsConf'];
        }
        if (isset($map['ossConf'])) {
            $model->ossConf = $map['ossConf'];
        }

        return $model;
    }
}
