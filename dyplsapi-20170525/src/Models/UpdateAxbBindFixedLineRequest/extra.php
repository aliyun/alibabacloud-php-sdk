<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\UpdateAxbBindFixedLineRequest;

use AlibabaCloud\Dara\Model;

class extra extends Model
{
    /**
     * @var string
     */
    public $callrecording;
    protected $_name = [
        'callrecording' => 'Callrecording',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['Callrecording'])) {
            $model->callrecording = $map['Callrecording'];
        }

        return $model;
    }
}
