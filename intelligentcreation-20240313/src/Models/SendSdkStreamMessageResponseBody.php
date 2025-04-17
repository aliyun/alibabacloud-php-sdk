<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class SendSdkStreamMessageResponseBody extends Model
{
    /**
     * @var string
     */
    public $commonStreamMessage;
    protected $_name = [
        'commonStreamMessage' => 'commonStreamMessage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonStreamMessage) {
            $res['commonStreamMessage'] = $this->commonStreamMessage;
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
        if (isset($map['commonStreamMessage'])) {
            $model->commonStreamMessage = $map['commonStreamMessage'];
        }

        return $model;
    }
}
