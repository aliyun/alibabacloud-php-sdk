<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListDataSetResponseBody;

use AlibabaCloud\Dara\Model;

class messages extends Model
{
    /**
     * @var string[]
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
                    $res['Message'][$n1] = $item1;
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
                    $model->message[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
