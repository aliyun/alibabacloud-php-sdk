<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\CreateExternalCACertificateRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateExternalCACertificateRequest\apiPassthrough\extensions;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateExternalCACertificateRequest\apiPassthrough\subject;

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
        'subject' => 'Subject',
    ];

    public function validate()
    {
        if (null !== $this->extensions) {
            $this->extensions->validate();
        }
        if (null !== $this->subject) {
            $this->subject->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extensions) {
            $res['Extensions'] = null !== $this->extensions ? $this->extensions->toArray($noStream) : $this->extensions;
        }

        if (null !== $this->subject) {
            $res['Subject'] = null !== $this->subject ? $this->subject->toArray($noStream) : $this->subject;
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
        if (isset($map['Extensions'])) {
            $model->extensions = extensions::fromMap($map['Extensions']);
        }

        if (isset($map['Subject'])) {
            $model->subject = subject::fromMap($map['Subject']);
        }

        return $model;
    }
}
