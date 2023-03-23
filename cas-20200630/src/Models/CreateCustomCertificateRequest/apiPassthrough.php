<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest;

use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough\extensions;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough\subject;
use AlibabaCloud\Tea\Model;

class apiPassthrough extends Model
{
    /**
     * @var extensions
     */
    public $extensions;

    /**
     * @var subject
     */
    public $subject;
    protected $_name = [
        'extensions' => 'Extensions',
        'subject'    => 'Subject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extensions) {
            $res['Extensions'] = null !== $this->extensions ? $this->extensions->toMap() : null;
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
        if (isset($map['Subject'])) {
            $model->subject = subject::fromMap($map['Subject']);
        }

        return $model;
    }
}
