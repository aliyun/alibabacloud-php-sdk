<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateExternalCACertificateRequest\apiPassthrough;

class CreateExternalCACertificateRequest extends Model
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
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $validity;
    protected $_name = [
        'apiPassthrough' => 'ApiPassthrough',
        'csr' => 'Csr',
        'instanceId' => 'InstanceId',
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Validity'])) {
            $model->validity = $map['Validity'];
        }

        return $model;
    }
}
