<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeFingerPrintTemplatesResponseBody\fingerPrintTemplates;

class DescribeFingerPrintTemplatesResponseBody extends Model
{
    /**
     * @var fingerPrintTemplates[]
     */
    public $fingerPrintTemplates;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'fingerPrintTemplates' => 'FingerPrintTemplates',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->fingerPrintTemplates)) {
            Model::validateArray($this->fingerPrintTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fingerPrintTemplates) {
            if (\is_array($this->fingerPrintTemplates)) {
                $res['FingerPrintTemplates'] = [];
                $n1                          = 0;
                foreach ($this->fingerPrintTemplates as $item1) {
                    $res['FingerPrintTemplates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FingerPrintTemplates'])) {
            if (!empty($map['FingerPrintTemplates'])) {
                $model->fingerPrintTemplates = [];
                $n1                          = 0;
                foreach ($map['FingerPrintTemplates'] as $item1) {
                    $model->fingerPrintTemplates[$n1++] = fingerPrintTemplates::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
