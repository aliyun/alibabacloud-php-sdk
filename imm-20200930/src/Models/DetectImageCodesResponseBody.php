<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DetectImageCodesResponseBody extends Model
{
    /**
     * @var Codes[]
     */
    public $codes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'codes' => 'Codes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->codes)) {
            Model::validateArray($this->codes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codes) {
            if (\is_array($this->codes)) {
                $res['Codes'] = [];
                $n1 = 0;
                foreach ($this->codes as $item1) {
                    $res['Codes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Codes'])) {
            if (!empty($map['Codes'])) {
                $model->codes = [];
                $n1 = 0;
                foreach ($map['Codes'] as $item1) {
                    $model->codes[$n1++] = Codes::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
