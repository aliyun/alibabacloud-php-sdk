<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetTodoTaskResponseBody;

use AlibabaCloud\Dara\Model;

class detailUrl extends Model
{
    /**
     * @var string
     */
    public $appUrl;

    /**
     * @var string
     */
    public $pcUrl;
    protected $_name = [
        'appUrl' => 'AppUrl',
        'pcUrl' => 'PcUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appUrl) {
            $res['AppUrl'] = $this->appUrl;
        }

        if (null !== $this->pcUrl) {
            $res['PcUrl'] = $this->pcUrl;
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
        if (isset($map['AppUrl'])) {
            $model->appUrl = $map['AppUrl'];
        }

        if (isset($map['PcUrl'])) {
            $model->pcUrl = $map['PcUrl'];
        }

        return $model;
    }
}
