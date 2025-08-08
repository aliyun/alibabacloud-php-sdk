<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\ToolsetStatus\outputs;

use AlibabaCloud\Dara\Model;

class urls extends Model
{
    /**
     * @var string
     */
    public $internetUrl;

    /**
     * @var string
     */
    public $intranetUrl;
    protected $_name = [
        'internetUrl' => 'internetUrl',
        'intranetUrl' => 'intranetUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->internetUrl) {
            $res['internetUrl'] = $this->internetUrl;
        }

        if (null !== $this->intranetUrl) {
            $res['intranetUrl'] = $this->intranetUrl;
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
        if (isset($map['internetUrl'])) {
            $model->internetUrl = $map['internetUrl'];
        }

        if (isset($map['intranetUrl'])) {
            $model->intranetUrl = $map['intranetUrl'];
        }

        return $model;
    }
}
