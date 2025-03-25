<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\ThirdApp;

use AlibabaCloud\Tea\Model;

class secrets extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $secret;
    protected $_name = [
        'enable' => 'Enable',
        'secret' => 'Secret',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->secret) {
            $res['Secret'] = $this->secret;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secrets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Secret'])) {
            $model->secret = $map['Secret'];
        }

        return $model;
    }
}
