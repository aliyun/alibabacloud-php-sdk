<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateServerCertificateWithCsrRequest extends Model
{
    /**
     * @var int
     */
    public $afterTime;

    /**
     * @var int
     */
    public $beforeTime;

    /**
     * @var string
     */
    public $csr;

    /**
     * @var int
     */
    public $days;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $parentIdentifier;
    protected $_name = [
        'afterTime'        => 'AfterTime',
        'beforeTime'       => 'BeforeTime',
        'csr'              => 'Csr',
        'days'             => 'Days',
        'domain'           => 'Domain',
        'parentIdentifier' => 'ParentIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterTime) {
            $res['AfterTime'] = $this->afterTime;
        }
        if (null !== $this->beforeTime) {
            $res['BeforeTime'] = $this->beforeTime;
        }
        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }
        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->parentIdentifier) {
            $res['ParentIdentifier'] = $this->parentIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServerCertificateWithCsrRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AfterTime'])) {
            $model->afterTime = $map['AfterTime'];
        }
        if (isset($map['BeforeTime'])) {
            $model->beforeTime = $map['BeforeTime'];
        }
        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }
        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ParentIdentifier'])) {
            $model->parentIdentifier = $map['ParentIdentifier'];
        }

        return $model;
    }
}
