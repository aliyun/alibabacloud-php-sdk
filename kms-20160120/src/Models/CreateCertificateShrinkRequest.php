<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class CreateCertificateShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $exportablePrivateKey;

    /**
     * @var string
     */
    public $keySpec;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $subjectAlternativeNamesShrink;
    protected $_name = [
        'exportablePrivateKey'          => 'ExportablePrivateKey',
        'keySpec'                       => 'KeySpec',
        'subject'                       => 'Subject',
        'subjectAlternativeNamesShrink' => 'SubjectAlternativeNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportablePrivateKey) {
            $res['ExportablePrivateKey'] = $this->exportablePrivateKey;
        }
        if (null !== $this->keySpec) {
            $res['KeySpec'] = $this->keySpec;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }
        if (null !== $this->subjectAlternativeNamesShrink) {
            $res['SubjectAlternativeNames'] = $this->subjectAlternativeNamesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCertificateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportablePrivateKey'])) {
            $model->exportablePrivateKey = $map['ExportablePrivateKey'];
        }
        if (isset($map['KeySpec'])) {
            $model->keySpec = $map['KeySpec'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }
        if (isset($map['SubjectAlternativeNames'])) {
            $model->subjectAlternativeNamesShrink = $map['SubjectAlternativeNames'];
        }

        return $model;
    }
}
