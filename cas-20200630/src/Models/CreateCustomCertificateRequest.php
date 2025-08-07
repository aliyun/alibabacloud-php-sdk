<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough;

class CreateCustomCertificateRequest extends Model
{
    /**
     * @var apiPassthrough
     */
    public $apiPassthrough;

    /**
     * @var string
     */
    public $csr;

    /**
     * @var int
     */
    public $enableCrl;

    /**
     * @var int
     */
    public $immediately;

    /**
     * @var string
     */
    public $parentIdentifier;

    /**
     * @var string
     */
    public $validity;
    protected $_name = [
        'apiPassthrough' => 'ApiPassthrough',
        'csr' => 'Csr',
        'enableCrl' => 'EnableCrl',
        'immediately' => 'Immediately',
        'parentIdentifier' => 'ParentIdentifier',
        'validity' => 'Validity',
    ];

    public function validate()
    {
        if (null !== $this->apiPassthrough) {
            $this->apiPassthrough->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiPassthrough) {
            $res['ApiPassthrough'] = null !== $this->apiPassthrough ? $this->apiPassthrough->toArray($noStream) : $this->apiPassthrough;
        }

        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }

        if (null !== $this->enableCrl) {
            $res['EnableCrl'] = $this->enableCrl;
        }

        if (null !== $this->immediately) {
            $res['Immediately'] = $this->immediately;
        }

        if (null !== $this->parentIdentifier) {
            $res['ParentIdentifier'] = $this->parentIdentifier;
        }

        if (null !== $this->validity) {
            $res['Validity'] = $this->validity;
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
        if (isset($map['ApiPassthrough'])) {
            $model->apiPassthrough = apiPassthrough::fromMap($map['ApiPassthrough']);
        }

        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }

        if (isset($map['EnableCrl'])) {
            $model->enableCrl = $map['EnableCrl'];
        }

        if (isset($map['Immediately'])) {
            $model->immediately = $map['Immediately'];
        }

        if (isset($map['ParentIdentifier'])) {
            $model->parentIdentifier = $map['ParentIdentifier'];
        }

        if (isset($map['Validity'])) {
            $model->validity = $map['Validity'];
        }

        return $model;
    }
}
