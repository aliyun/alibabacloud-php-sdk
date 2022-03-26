<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithSAMLResponseBody;

use AlibabaCloud\Tea\Model;

class SAMLAssertionInfo extends Model
{
    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $recipient;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $subjectType;
    protected $_name = [
        'issuer'      => 'Issuer',
        'recipient'   => 'Recipient',
        'subject'     => 'Subject',
        'subjectType' => 'SubjectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->recipient) {
            $res['Recipient'] = $this->recipient;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->subjectType) {
            $res['SubjectType'] = $this->subjectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SAMLAssertionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['Recipient'])) {
            $model->recipient = $map['Recipient'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['SubjectType'])) {
            $model->subjectType = $map['SubjectType'];
        }

        return $model;
    }
}
