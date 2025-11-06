<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryQualificationDetailResponseBody\credentials;

use AlibabaCloud\Dara\Model;

class qualificationCredential extends Model
{
    /**
     * @var string
     */
    public $credentialNo;

    /**
     * @var string
     */
    public $credentialType;

    /**
     * @var string
     */
    public $credentialUrl;
    protected $_name = [
        'credentialNo' => 'CredentialNo',
        'credentialType' => 'CredentialType',
        'credentialUrl' => 'CredentialUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialNo) {
            $res['CredentialNo'] = $this->credentialNo;
        }

        if (null !== $this->credentialType) {
            $res['CredentialType'] = $this->credentialType;
        }

        if (null !== $this->credentialUrl) {
            $res['CredentialUrl'] = $this->credentialUrl;
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
        if (isset($map['CredentialNo'])) {
            $model->credentialNo = $map['CredentialNo'];
        }

        if (isset($map['CredentialType'])) {
            $model->credentialType = $map['CredentialType'];
        }

        if (isset($map['CredentialUrl'])) {
            $model->credentialUrl = $map['CredentialUrl'];
        }

        return $model;
    }
}
