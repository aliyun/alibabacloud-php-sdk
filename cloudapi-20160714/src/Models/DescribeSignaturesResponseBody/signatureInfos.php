<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesResponseBody\signatureInfos\signatureInfo;

class signatureInfos extends Model
{
    /**
     * @var signatureInfo[]
     */
    public $signatureInfo;
    protected $_name = [
        'signatureInfo' => 'SignatureInfo',
    ];

    public function validate()
    {
        if (\is_array($this->signatureInfo)) {
            Model::validateArray($this->signatureInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->signatureInfo) {
            if (\is_array($this->signatureInfo)) {
                $res['SignatureInfo'] = [];
                $n1 = 0;
                foreach ($this->signatureInfo as $item1) {
                    $res['SignatureInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SignatureInfo'])) {
            if (!empty($map['SignatureInfo'])) {
                $model->signatureInfo = [];
                $n1 = 0;
                foreach ($map['SignatureInfo'] as $item1) {
                    $model->signatureInfo[$n1++] = signatureInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
