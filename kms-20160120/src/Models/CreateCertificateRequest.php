<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $subject;

    /**
     * @var mixed[]
     */
    public $subjectAlternativeNames;

    /**
     * @var string
     */
    public $keySpec;

    /**
     * @var string
     */
    public $protectionLevel;
    protected $_name = [
        'subject'                 => 'Subject',
        'subjectAlternativeNames' => 'SubjectAlternativeNames',
        'keySpec'                 => 'KeySpec',
        'protectionLevel'         => 'ProtectionLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->subjectAlternativeNames) {
            $res['SubjectAlternativeNames'] = $this->subjectAlternativeNames;
        }
        if (null !== $this->keySpec) {
            $res['KeySpec'] = $this->keySpec;
        }
        if (null !== $this->protectionLevel) {
            $res['ProtectionLevel'] = $this->protectionLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['SubjectAlternativeNames'])) {
            $model->subjectAlternativeNames = $map['SubjectAlternativeNames'];
        }
        if (isset($map['KeySpec'])) {
            $model->keySpec = $map['KeySpec'];
        }
        if (isset($map['ProtectionLevel'])) {
            $model->protectionLevel = $map['ProtectionLevel'];
        }

        return $model;
    }
}
