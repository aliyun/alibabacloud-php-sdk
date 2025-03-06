<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesResponseBody\signatureInfos\signatureInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->signatureInfo) {
            $res['SignatureInfo'] = [];
            if (null !== $this->signatureInfo && \is_array($this->signatureInfo)) {
                $n = 0;
                foreach ($this->signatureInfo as $item) {
                    $res['SignatureInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return signatureInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SignatureInfo'])) {
            if (!empty($map['SignatureInfo'])) {
                $model->signatureInfo = [];
                $n                    = 0;
                foreach ($map['SignatureInfo'] as $item) {
                    $model->signatureInfo[$n++] = null !== $item ? signatureInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
