<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20160511\Models;

use AlibabaCloud\Dara\Model;

class SaveContactTemplateCredentialRequest extends Model
{
    /**
     * @var int
     */
    public $contactTemplateId;

    /**
     * @var string
     */
    public $credential;

    /**
     * @var string
     */
    public $credentialNo;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'contactTemplateId' => 'ContactTemplateId',
        'credential' => 'Credential',
        'credentialNo' => 'CredentialNo',
        'lang' => 'Lang',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactTemplateId) {
            $res['ContactTemplateId'] = $this->contactTemplateId;
        }

        if (null !== $this->credential) {
            $res['Credential'] = $this->credential;
        }

        if (null !== $this->credentialNo) {
            $res['CredentialNo'] = $this->credentialNo;
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
        if (isset($map['ContactTemplateId'])) {
            $model->contactTemplateId = $map['ContactTemplateId'];
        }

        if (isset($map['Credential'])) {
            $model->credential = $map['Credential'];
        }

        if (isset($map['CredentialNo'])) {
            $model->credentialNo = $map['CredentialNo'];
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
