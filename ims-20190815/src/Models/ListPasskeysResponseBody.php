<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListPasskeysResponseBody\passkeys;
use AlibabaCloud\Tea\Model;

class ListPasskeysResponseBody extends Model
{
    /**
     * @description The information about the passkeys.
     *
     * @var passkeys[]
     */
    public $passkeys;

    /**
     * @description The request ID.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'passkeys'  => 'Passkeys',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->passkeys) {
            $res['Passkeys'] = [];
            if (null !== $this->passkeys && \is_array($this->passkeys)) {
                $n = 0;
                foreach ($this->passkeys as $item) {
                    $res['Passkeys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPasskeysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Passkeys'])) {
            if (!empty($map['Passkeys'])) {
                $model->passkeys = [];
                $n               = 0;
                foreach ($map['Passkeys'] as $item) {
                    $model->passkeys[$n++] = null !== $item ? passkeys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
