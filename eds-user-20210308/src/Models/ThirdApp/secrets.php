<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\ThirdApp;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
