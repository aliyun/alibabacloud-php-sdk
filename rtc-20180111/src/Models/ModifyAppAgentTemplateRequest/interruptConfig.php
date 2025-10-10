<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppAgentTemplateRequest;

use AlibabaCloud\Dara\Model;

class interruptConfig extends Model
{
    /**
     * @var bool
     */
    public $semanticsInterrupt;
    protected $_name = [
        'semanticsInterrupt' => 'SemanticsInterrupt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->semanticsInterrupt) {
            $res['SemanticsInterrupt'] = $this->semanticsInterrupt;
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
        if (isset($map['SemanticsInterrupt'])) {
            $model->semanticsInterrupt = $map['SemanticsInterrupt'];
        }

        return $model;
    }
}
