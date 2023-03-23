<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough;
use AlibabaCloud\Tea\Model;

class CreateCustomCertificateRequest extends Model
{
    /**
     * @var apiPassthrough
     */
    public $apiPassthrough;

    /**
     * @example -----BEGIN CERTIFICATE REQUEST-----
     * -----END CERTIFICATE REQUEST-----
     * @var string
     */
    public $csr;

    /**
     * @example 0
     *
     * @var int
     */
    public $immediately;

    /**
     * @example 1ed4068c-6f1b-6deb-8e32-3f8439a851cb
     *
     * @var string
     */
    public $parentIdentifier;

    /**
     * @var string
     */
    public $validity;
    protected $_name = [
        'apiPassthrough'   => 'ApiPassthrough',
        'csr'              => 'Csr',
        'immediately'      => 'Immediately',
        'parentIdentifier' => 'ParentIdentifier',
        'validity'         => 'Validity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiPassthrough) {
            $res['ApiPassthrough'] = null !== $this->apiPassthrough ? $this->apiPassthrough->toMap() : null;
        }
        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
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

    /**
     * @param array $map
     *
     * @return CreateCustomCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiPassthrough'])) {
            $model->apiPassthrough = apiPassthrough::fromMap($map['ApiPassthrough']);
        }
        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
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
