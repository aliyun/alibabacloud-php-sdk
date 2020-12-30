<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryQualificationDetailResponseBody\credentials;

use AlibabaCloud\Tea\Model;

class qualificationCredential extends Model
{
    /**
     * @var string
     */
    public $credentialType;

    /**
     * @var string
     */
    public $credentialNo;

    /**
     * @var string
     */
    public $credentialUrl;
    protected $_name = [
        'credentialType' => 'CredentialType',
        'credentialNo'   => 'CredentialNo',
        'credentialUrl'  => 'CredentialUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialType) {
            $res['CredentialType'] = $this->credentialType;
        }
        if (null !== $this->credentialNo) {
            $res['CredentialNo'] = $this->credentialNo;
        }
        if (null !== $this->credentialUrl) {
            $res['CredentialUrl'] = $this->credentialUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qualificationCredential
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialType'])) {
            $model->credentialType = $map['CredentialType'];
        }
        if (isset($map['CredentialNo'])) {
            $model->credentialNo = $map['CredentialNo'];
        }
        if (isset($map['CredentialUrl'])) {
            $model->credentialUrl = $map['CredentialUrl'];
        }

        return $model;
    }
}
