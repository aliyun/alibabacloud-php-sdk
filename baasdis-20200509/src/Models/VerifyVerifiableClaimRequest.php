<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BaasDis\V20200509\Models;

use AlibabaCloud\Tea\Model;

class VerifyVerifiableClaimRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example {"proof": {"type": "ecdsa","verificationMethod": "did:mychain:xxx#keys-1","signatureValue": "xxx"},"content": {"issuanceDate": 1589964299367,"subject": "did:mychain:xxx","expire": -1,"claim": "test01","id": "vc:mychain:xxx","type": ["VerifiableCredential"],"version": "0.7.0","@context": "https://www.w3.org/2018/credentials/v1","issuer": "did:mychain:xxx","status": {"id": "vc:mychain:xxx","type": "BlockChainStatusList"}}}
     *
     * @var string
     */
    public $VCContent;
    protected $_name = [
        'VCContent' => 'VCContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VCContent) {
            $res['VCContent'] = $this->VCContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyVerifiableClaimRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VCContent'])) {
            $model->VCContent = $map['VCContent'];
        }

        return $model;
    }
}
