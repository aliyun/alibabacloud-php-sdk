<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\CheckCopyRuleVariableResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\CheckCopyRuleVariableResponseBody\resultObject\message;

class resultObject extends Model
{
    /**
     * @var message[]
     */
    public $message;
    protected $_name = [
        'message' => 'Message',
    ];

    public function validate()
    {
        if (\is_array($this->message)) {
            Model::validateArray($this->message);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            if (\is_array($this->message)) {
                $res['Message'] = [];
                $n1 = 0;
                foreach ($this->message as $item1) {
                    $res['Message'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Message'])) {
            if (!empty($map['Message'])) {
                $model->message = [];
                $n1 = 0;
                foreach ($map['Message'] as $item1) {
                    $model->message[$n1] = message::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
