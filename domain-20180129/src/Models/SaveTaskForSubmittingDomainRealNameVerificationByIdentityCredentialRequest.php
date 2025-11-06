<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

class SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredentialRequest extends Model
{
    /**
     * @var string[]
     */
    public $domainName;

    /**
     * @var string
     */
    public $identityCredential;

    /**
     * @var string
     */
    public $identityCredentialNo;

    /**
     * @var string
     */
    public $identityCredentialType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainName' => 'DomainName',
        'identityCredential' => 'IdentityCredential',
        'identityCredentialNo' => 'IdentityCredentialNo',
        'identityCredentialType' => 'IdentityCredentialType',
        'lang' => 'Lang',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        if (\is_array($this->domainName)) {
            Model::validateArray($this->domainName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainName) {
            if (\is_array($this->domainName)) {
                $res['DomainName'] = [];
                $n1 = 0;
                foreach ($this->domainName as $item1) {
                    $res['DomainName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->identityCredential) {
            $res['IdentityCredential'] = $this->identityCredential;
        }

        if (null !== $this->identityCredentialNo) {
            $res['IdentityCredentialNo'] = $this->identityCredentialNo;
        }

        if (null !== $this->identityCredentialType) {
            $res['IdentityCredentialType'] = $this->identityCredentialType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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
        if (isset($map['DomainName'])) {
            if (!empty($map['DomainName'])) {
                $model->domainName = [];
                $n1 = 0;
                foreach ($map['DomainName'] as $item1) {
                    $model->domainName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IdentityCredential'])) {
            $model->identityCredential = $map['IdentityCredential'];
        }

        if (isset($map['IdentityCredentialNo'])) {
            $model->identityCredentialNo = $map['IdentityCredentialNo'];
        }

        if (isset($map['IdentityCredentialType'])) {
            $model->identityCredentialType = $map['IdentityCredentialType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
