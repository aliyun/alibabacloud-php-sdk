<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListPasskeysResponseBody\passkeys;

class ListPasskeysResponseBody extends Model
{
    /**
     * @var passkeys[]
     */
    public $passkeys;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'passkeys'  => 'Passkeys',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->passkeys)) {
            Model::validateArray($this->passkeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passkeys) {
            if (\is_array($this->passkeys)) {
                $res['Passkeys'] = [];
                $n1              = 0;
                foreach ($this->passkeys as $item1) {
                    $res['Passkeys'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Passkeys'])) {
            if (!empty($map['Passkeys'])) {
                $model->passkeys = [];
                $n1              = 0;
                foreach ($map['Passkeys'] as $item1) {
                    $model->passkeys[$n1++] = passkeys::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
