<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiSignaturesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiSignaturesResponseBody\apiSignatures\apiSignatureItem;

class apiSignatures extends Model
{
    /**
     * @var apiSignatureItem[]
     */
    public $apiSignatureItem;
    protected $_name = [
        'apiSignatureItem' => 'ApiSignatureItem',
    ];

    public function validate()
    {
        if (\is_array($this->apiSignatureItem)) {
            Model::validateArray($this->apiSignatureItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiSignatureItem) {
            if (\is_array($this->apiSignatureItem)) {
                $res['ApiSignatureItem'] = [];
                $n1 = 0;
                foreach ($this->apiSignatureItem as $item1) {
                    $res['ApiSignatureItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiSignatureItem'])) {
            if (!empty($map['ApiSignatureItem'])) {
                $model->apiSignatureItem = [];
                $n1 = 0;
                foreach ($map['ApiSignatureItem'] as $item1) {
                    $model->apiSignatureItem[$n1++] = apiSignatureItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
