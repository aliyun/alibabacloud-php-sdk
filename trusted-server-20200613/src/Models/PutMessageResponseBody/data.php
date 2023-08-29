<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models\PutMessageResponseBody;

use AlibabaCloud\SDK\Trustedserver\V20200613\Models\PutMessageResponseBody\data\kmoduleVerificationResult;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\PutMessageResponseBody\data\policyProcResult;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\PutMessageResponseBody\data\programVerificationResult;
use AlibabaCloud\SDK\Trustedserver\V20200613\Models\PutMessageResponseBody\data\systemVerificationResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var kmoduleVerificationResult
     */
    public $kmoduleVerificationResult;

    /**
     * @example 0
     *
     * @var int
     */
    public $nextClientIMAIndex;

    /**
     * @var policyProcResult
     */
    public $policyProcResult;

    /**
     * @var programVerificationResult
     */
    public $programVerificationResult;

    /**
     * @var systemVerificationResult
     */
    public $systemVerificationResult;
    protected $_name = [
        'kmoduleVerificationResult' => 'kmoduleVerificationResult',
        'nextClientIMAIndex'        => 'nextClientIMAIndex',
        'policyProcResult'          => 'policyProcResult',
        'programVerificationResult' => 'programVerificationResult',
        'systemVerificationResult'  => 'systemVerificationResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kmoduleVerificationResult) {
            $res['kmoduleVerificationResult'] = null !== $this->kmoduleVerificationResult ? $this->kmoduleVerificationResult->toMap() : null;
        }
        if (null !== $this->nextClientIMAIndex) {
            $res['nextClientIMAIndex'] = $this->nextClientIMAIndex;
        }
        if (null !== $this->policyProcResult) {
            $res['policyProcResult'] = null !== $this->policyProcResult ? $this->policyProcResult->toMap() : null;
        }
        if (null !== $this->programVerificationResult) {
            $res['programVerificationResult'] = null !== $this->programVerificationResult ? $this->programVerificationResult->toMap() : null;
        }
        if (null !== $this->systemVerificationResult) {
            $res['systemVerificationResult'] = null !== $this->systemVerificationResult ? $this->systemVerificationResult->toMap() : null;
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
        if (isset($map['kmoduleVerificationResult'])) {
            $model->kmoduleVerificationResult = kmoduleVerificationResult::fromMap($map['kmoduleVerificationResult']);
        }
        if (isset($map['nextClientIMAIndex'])) {
            $model->nextClientIMAIndex = $map['nextClientIMAIndex'];
        }
        if (isset($map['policyProcResult'])) {
            $model->policyProcResult = policyProcResult::fromMap($map['policyProcResult']);
        }
        if (isset($map['programVerificationResult'])) {
            $model->programVerificationResult = programVerificationResult::fromMap($map['programVerificationResult']);
        }
        if (isset($map['systemVerificationResult'])) {
            $model->systemVerificationResult = systemVerificationResult::fromMap($map['systemVerificationResult']);
        }

        return $model;
    }
}
