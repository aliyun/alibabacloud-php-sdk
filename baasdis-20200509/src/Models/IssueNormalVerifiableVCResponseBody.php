<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BaasDis\V20200509\Models;

use AlibabaCloud\Tea\Model;

class IssueNormalVerifiableVCResponseBody extends Model
{
    /**
     * @example "4D1E29A7-17D6-48AD-B5AF-F44FAB68D87D"
     *
     * @var string
     */
    public $requestId;

    /**
     * @example "OK"
     *
     * @var string
     */
    public $resultCode;

    /**
     * @example ""
     *
     * @var string
     */
    public $resultMessage;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example "{\\"proof\\":{\\"type\\":\\"ecdsa\\",\\"verificationMethod\\":\\"did:mychain:xxx#keys-1\\",\\"signatureValue\\":\\"xxx\\"},\\"content\\":{\\"issuanceDate\\":1590127960785,\\"subject\\":\\"did:mychain:xxx\\",\\"expire\\":-1,\\"claim\\":\\"test\\",\\"id\\":\\"vc:mychain:xxx\\",\\"type\\":[\\"VerifiableCredential\\"],\\"version\\":\\"0.7.0\\",\\"@context\\":\\"https://www.w3.org/2018/credentials/v1\\",\\"issuer\\":\\"did:mychain:xxx\\",\\"status\\":{\\"id\\":\\"vc:mychain:xxx\\",\\"type\\":\\"BlockChainStatusList\\"}}}"
     *
     * @var string
     */
    public $verifiableClaimContent;

    /**
     * @example "vc:mychain:xxx"
     *
     * @var string
     */
    public $verifiableClaimId;
    protected $_name = [
        'requestId'              => 'RequestId',
        'resultCode'             => 'ResultCode',
        'resultMessage'          => 'ResultMessage',
        'success'                => 'Success',
        'verifiableClaimContent' => 'VerifiableClaimContent',
        'verifiableClaimId'      => 'VerifiableClaimId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->resultMessage) {
            $res['ResultMessage'] = $this->resultMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->verifiableClaimContent) {
            $res['VerifiableClaimContent'] = $this->verifiableClaimContent;
        }
        if (null !== $this->verifiableClaimId) {
            $res['VerifiableClaimId'] = $this->verifiableClaimId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IssueNormalVerifiableVCResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['ResultMessage'])) {
            $model->resultMessage = $map['ResultMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['VerifiableClaimContent'])) {
            $model->verifiableClaimContent = $map['VerifiableClaimContent'];
        }
        if (isset($map['VerifiableClaimId'])) {
            $model->verifiableClaimId = $map['VerifiableClaimId'];
        }

        return $model;
    }
}
