<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeFingerPrintTemplatesResponseBody\fingerPrintTemplates;
use AlibabaCloud\Tea\Model;

class DescribeFingerPrintTemplatesResponseBody extends Model
{
    /**
     * @var fingerPrintTemplates[]
     */
    public $fingerPrintTemplates;

    /**
     * @example 9C1D3FBE-84E1-5ABB-AD98-2003AC71****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fingerPrintTemplates' => 'FingerPrintTemplates',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fingerPrintTemplates) {
            $res['FingerPrintTemplates'] = [];
            if (null !== $this->fingerPrintTemplates && \is_array($this->fingerPrintTemplates)) {
                $n = 0;
                foreach ($this->fingerPrintTemplates as $item) {
                    $res['FingerPrintTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeFingerPrintTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FingerPrintTemplates'])) {
            if (!empty($map['FingerPrintTemplates'])) {
                $model->fingerPrintTemplates = [];
                $n                           = 0;
                foreach ($map['FingerPrintTemplates'] as $item) {
                    $model->fingerPrintTemplates[$n++] = null !== $item ? fingerPrintTemplates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
