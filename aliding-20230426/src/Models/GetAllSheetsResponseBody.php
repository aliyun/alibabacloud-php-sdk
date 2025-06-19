<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAllSheetsResponseBody\value;

class GetAllSheetsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var value[]
     */
    public $value;
    protected $_name = [
        'requestId' => 'requestId',
        'value' => 'value',
    ];

    public function validate()
    {
        if (\is_array($this->value)) {
            Model::validateArray($this->value);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->value) {
            if (\is_array($this->value)) {
                $res['value'] = [];
                $n1 = 0;
                foreach ($this->value as $item1) {
                    $res['value'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['value'])) {
            if (!empty($map['value'])) {
                $model->value = [];
                $n1 = 0;
                foreach ($map['value'] as $item1) {
                    $model->value[$n1] = value::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
