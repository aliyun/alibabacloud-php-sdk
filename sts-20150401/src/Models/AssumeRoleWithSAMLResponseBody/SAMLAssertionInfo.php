<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sts\V20150401\Models\AssumeRoleWithSAMLResponseBody;

use AlibabaCloud\Tea\Model;

class SAMLAssertionInfo extends Model
{
    /**
     * @var string
     */
    public $subjectType;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $recipient;
    protected $_name = [
        'subjectType' => 'SubjectType',
        'subject'     => 'Subject',
        'issuer'      => 'Issuer',
        'recipient'   => 'Recipient',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subjectType) {
            $res['SubjectType'] = $this->subjectType;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
        }
        if (null !== $this->recipient) {
            $res['Recipient'] = $this->recipient;
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
        if (isset($map['SubjectType'])) {
            $model->subjectType = $map['SubjectType'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }
        if (isset($map['Recipient'])) {
            $model->recipient = $map['Recipient'];
        }

        return $model;
    }
}
