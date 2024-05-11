<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DetectImageCodesResponseBody extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var Codes[]
     */
    public $codes;

    /**
     * @example 6E93D6C9-5AC0-49F9-914D-E02678D3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'codes'     => 'Codes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codes) {
            $res['Codes'] = [];
            if (null !== $this->codes && \is_array($this->codes)) {
                $n = 0;
                foreach ($this->codes as $item) {
                    $res['Codes'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DetectImageCodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Codes'])) {
            if (!empty($map['Codes'])) {
                $model->codes = [];
                $n            = 0;
                foreach ($map['Codes'] as $item) {
                    $model->codes[$n++] = null !== $item ? Codes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
