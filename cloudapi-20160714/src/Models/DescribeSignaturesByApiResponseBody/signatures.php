<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesByApiResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesByApiResponseBody\signatures\signatureItem;

class signatures extends Model
{
    /**
     * @var signatureItem[]
     */
    public $signatureItem;
    protected $_name = [
        'signatureItem' => 'SignatureItem',
    ];

    public function validate()
    {
        if (\is_array($this->signatureItem)) {
            Model::validateArray($this->signatureItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->signatureItem) {
            if (\is_array($this->signatureItem)) {
                $res['SignatureItem'] = [];
                $n1 = 0;
                foreach ($this->signatureItem as $item1) {
                    $res['SignatureItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SignatureItem'])) {
            if (!empty($map['SignatureItem'])) {
                $model->signatureItem = [];
                $n1 = 0;
                foreach ($map['SignatureItem'] as $item1) {
                    $model->signatureItem[$n1] = signatureItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
