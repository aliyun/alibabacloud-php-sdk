<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest;

use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough\extensions;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough\subject;
use AlibabaCloud\Tea\Model;

class apiPassthrough extends Model
{
    /**
     * @description The extensions of the certificate.
     *
     * @var extensions
     */
    public $extensions;

    /**
     * @description The serial number MUST be a positive integer assigned by the CA to each certificate.
     *
     * @example 16889526086333
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description The name of the entity that uses the certificate.
     *
     * @var subject
     */
    public $subject;
    protected $_name = [
        'extensions' => 'Extensions',
        'serialNumber' => 'SerialNumber',
        'subject' => 'Subject',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->extensions) {
            $res['Extensions'] = null !== $this->extensions ? $this->extensions->toMap() : null;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->subject) {
            $res['Subject'] = null !== $this->subject ? $this->subject->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiPassthrough
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extensions'])) {
            $model->extensions = extensions::fromMap($map['Extensions']);
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Subject'])) {
            $model->subject = subject::fromMap($map['Subject']);
        }

        return $model;
    }
}
