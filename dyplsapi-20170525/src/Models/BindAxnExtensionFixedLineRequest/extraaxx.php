<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindAxnExtensionFixedLineRequest;

use AlibabaCloud\Dara\Model;

class extraaxx extends Model
{
    /**
     * @var string
     */
    public $callback;

    /**
     * @var string
     */
    public $callrecording;
    protected $_name = [
        'callback' => 'Callback',
        'callrecording' => 'Callrecording',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }

        if (null !== $this->callrecording) {
            $res['Callrecording'] = $this->callrecording;
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
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }

        if (isset($map['Callrecording'])) {
            $model->callrecording = $map['Callrecording'];
        }

        return $model;
    }
}
