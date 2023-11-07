<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryQualificationDetailResponseBody\credentials;

use AlibabaCloud\Tea\Model;

class qualificationCredential extends Model
{
    /**
     * @example 92610725MA7G2E****
     *
     * @var string
     */
    public $credentialNo;

    /**
     * @example SHSQB
     *
     * @var string
     */
    public $credentialType;

    /**
     * @example 11212121/1212d**\/sqb.jpg
     *
     * @var string
     */
    public $credentialUrl;
    protected $_name = [
        'credentialNo'   => 'CredentialNo',
        'credentialType' => 'CredentialType',
        'credentialUrl'  => 'CredentialUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return qualificationCredential
     */
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
