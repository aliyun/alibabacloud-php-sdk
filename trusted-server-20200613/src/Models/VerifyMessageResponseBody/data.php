<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models\VerifyMessageResponseBody;

use AlibabaCloud\SDK\Trustedserver\V20200613\Models\VerifyMessageResponseBody\data\imaVerificationResult;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\VerifyMessageResponseBody\data\pcrVerificationResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var imaVerificationResult
     */
    public $imaVerificationResult;

    /**
     * @var pcrVerificationResult
     */
    public $pcrVerificationResult;
    protected $_name = [
        'imaVerificationResult' => 'ImaVerificationResult',
        'pcrVerificationResult' => 'PcrVerificationResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imaVerificationResult) {
            $res['ImaVerificationResult'] = null !== $this->imaVerificationResult ? $this->imaVerificationResult->toMap() : null;
        }
        if (null !== $this->pcrVerificationResult) {
            $res['PcrVerificationResult'] = null !== $this->pcrVerificationResult ? $this->pcrVerificationResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImaVerificationResult'])) {
            $model->imaVerificationResult = imaVerificationResult::fromMap($map['ImaVerificationResult']);
        }
        if (isset($map['PcrVerificationResult'])) {
            $model->pcrVerificationResult = pcrVerificationResult::fromMap($map['PcrVerificationResult']);
        }

        return $model;
    }
}
