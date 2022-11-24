<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class BasicResourceSettingSpec extends Model
{
    /**
     * @var float
     */
    public $cpu;

    /**
     * @var string
     */
    public $memory;
    protected $_name = [
        'cpu'    => 'cpu',
        'memory' => 'memory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }
        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BasicResourceSettingSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }
        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        return $model;
    }
}
