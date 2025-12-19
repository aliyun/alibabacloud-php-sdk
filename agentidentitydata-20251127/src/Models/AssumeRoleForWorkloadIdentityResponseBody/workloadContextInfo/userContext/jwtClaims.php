<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentityData\V20251127\Models\AssumeRoleForWorkloadIdentityResponseBody\workloadContextInfo\userContext;

use AlibabaCloud\Dara\Model;

class jwtClaims extends Model
{
    /**
     * @var string
     */
    public $audiences;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $subject;
    protected $_name = [
        'audiences' => 'Audiences',
        'issuer' => 'Issuer',
        'subject' => 'Subject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audiences) {
            $res['Audiences'] = $this->audiences;
        }

        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }

        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
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
        if (isset($map['Audiences'])) {
            $model->audiences = $map['Audiences'];
        }

        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }

        return $model;
    }
}
