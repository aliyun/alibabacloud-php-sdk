<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models\VerifyImageSignatureResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\VerifyImageSignatureResponseBody\manifest\assertions;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\VerifyImageSignatureResponseBody\manifest\signatureInfo;

class manifest extends Model
{
    /**
     * @var assertions[]
     */
    public $assertions;

    /**
     * @var signatureInfo
     */
    public $signatureInfo;
    protected $_name = [
        'assertions' => 'Assertions',
        'signatureInfo' => 'SignatureInfo',
    ];

    public function validate()
    {
        if (\is_array($this->assertions)) {
            Model::validateArray($this->assertions);
        }
        if (null !== $this->signatureInfo) {
            $this->signatureInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assertions) {
            if (\is_array($this->assertions)) {
                $res['Assertions'] = [];
                $n1 = 0;
                foreach ($this->assertions as $item1) {
                    $res['Assertions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->signatureInfo) {
            $res['SignatureInfo'] = null !== $this->signatureInfo ? $this->signatureInfo->toArray($noStream) : $this->signatureInfo;
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
        if (isset($map['Assertions'])) {
            if (!empty($map['Assertions'])) {
                $model->assertions = [];
                $n1 = 0;
                foreach ($map['Assertions'] as $item1) {
                    $model->assertions[$n1] = assertions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SignatureInfo'])) {
            $model->signatureInfo = signatureInfo::fromMap($map['SignatureInfo']);
        }

        return $model;
    }
}
