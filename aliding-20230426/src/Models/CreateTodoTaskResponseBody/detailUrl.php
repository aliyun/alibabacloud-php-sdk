<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskResponseBody;

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
        'appUrl' => 'appUrl',
        'pcUrl'  => 'pcUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appUrl) {
            $res['appUrl'] = $this->appUrl;
        }

        if (null !== $this->pcUrl) {
            $res['pcUrl'] = $this->pcUrl;
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
        if (isset($map['appUrl'])) {
            $model->appUrl = $map['appUrl'];
        }

        if (isset($map['pcUrl'])) {
            $model->pcUrl = $map['pcUrl'];
        }

        return $model;
    }
}
